<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends PublicController {
	/*
	 *增加商品分类
	 */
	public function product_cate_add(){
    $this->checkLevel(12);
    	$category = $this->getCategory();
    	$this->assign("category",$category);
    	if(IS_POST){
    		$data["name"] = I('post.name');
    		$data["pid"] = I('post.pid');
    		$info = M('product_cate')->add($data);
    		if($info){
                $this->redirect('Product/product_cate_lists');
	        }else{
	            $this->error('提交失败');
	        }      
    	}
        $this->display();
    }
    /*
     *商品分类列表
     */
    public function product_cate_lists(){
      $this->checkLevel(13);
    	$category = $this->getCategory();
    	$this->assign("category",$category);
        $this->display();
    }
    /*
     *商品分类修改
     */
    public function product_cate_update(){
      $this->checkLevel(14);
        $id = I('get.id');
        $arr1 = $this->getCategory($id);
        $arr[] = $id;
        foreach ($arr1 as $k => $v) {
            $arr[]=$v["id"];
        }
        $cate=array();
        $category=$this->getCategory();
        foreach ($category as $k => $v) {
            if(!in_array($v["id"], $arr)){
                $cate[] = $v;
            }
        }
        $this->assign("cate",$cate);
        $data = M('product_cate')->where(array('id'=>$id))->find();
        $this->assign("data",$data);
        if(IS_POST){
            $id = I('post.id');
            $data['name'] = I('post.name');
            $data['pid'] = I('post.pid');
            $info = M('product_cate')->where(array('id'=>$id))->save($data);
            if($info){
            	$this->redirect('Product/product_cate_lists');
        	}else {
            	$this->error('提交失败');
        	}
        }
        $this->display();
    }

    /*
     *商品分类删除
     */
    public function product_cate_delete(){
      $this->checkLevel(15);
    	$id=I('get.id');
    	$info = $this->deleteCategory($id);
    	if($info){
            $this->redirect('Product/product_cate_lists');
        }else {
            $this->error('删除失败');
        }
    }

    /*
     *商品添加
     */
    public function product_add(){
      $this->checkLevel(8);
        $cate = $this->getCategory();
        $this->assign('cate',$cate);
        if(IS_POST){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->saveName  =     array('uniqid','');
            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
            $upload->savePath  =     'product/'; // 设置附件上传（子）目录
            $info   =   $upload->upload(array($_FILES['image']));//存储了图片的信息
            foreach ($info as $k => $v) {
                $arr[] = './Uploads/'.$v['savepath'].$v['savename'];
            }
            $image = new \Think\Image(); 
            foreach ($arr as $k => $v) {
                $image->open($v);
                $image->thumb(100, 100)->save($v.'thumb.jpg');
                $image->open($v)->water('./logo.png')->save($v.'water.jpg');
            }
            $key = I('post.key');
            $val = I('post.val');
            foreach ($key as $k1 => $v1) { //生成属性键值对数组
                foreach ($val as $k2 => $v2) {
                    if($k1==$k2){
                        $attr["$v1"]=explode(' ',$v2);
                    }
                }
            }
            $data["attr"] = json_encode($attr);
            $data["pro_name"] = I('post.pro_name');
            $data["cate"] = I('post.cate');
            $data["price"] = I('post.price');
            $data["new_price"] = I('post.new_price');
            $data["num"] = I('post.num');
            $data["content"] = I('post.content');
            $data["image"] = json_encode($arr); 
            $data["create_time"] = time();
            $result = M('product')->add($data);
            if($result){
                $this->redirect('Product/product_lists?p=1');
            }else{
                $this->error("产品添加失败");
            }
        }

        $this->display();
    }

    /*
     *商品列表
     */
    public function product_lists(){
      $this->checkLevel(9);
        $cate = M('product_cate')->select();
        $data1 = M('product'); 
        $data = $data1->order('create_time desc')->page($_GET['p'].',2')->select();
        $count      = $data1->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page -> setConfig('header','共 %TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $Page->show();
        $curpage=$Page->nowPage;
        
        for($i=0;$i<count($data);$i++){
            $data[$i]["image"] = json_decode($data[$i]["image"])[0];
            $data[$i]["create_time"] = date("y-m-d",$data[$i]["create_time"]);
            foreach ($cate as $k => $v) {
                if($data[$i]["cate"]==$v["id"]){
                    $data[$i]["cate"]=$v["name"];
                }
            }
        }

        if(IS_AJAX){
            for($i=0;$i<count($data);$i++){
                $data[$i]["attr"]="";
            }
            echo json_encode(array('lists'=>$data,'show'=>$show,'curpage'=>$curpage));
            //echo 1;
            die;
        }
        
        $this->assign('data',$data);
        $this->assign('show',$show);
        $this->assign('curpage',$curpage);
        $this->display();
    }

    /*
     *商品修改
     */
    public function product_update(){
      $this->checkLevel(10);
        if($_GET['id']){
            $id = I('get.id');
        }else{
            $id = I('post.id');
        }
        $curpage = I('get.curpage');
        $cate = $this->getCategory();
        $data = M('product')->where(array('id'=>$id))->find();
        $data["attr"] = json_decode($data["attr"],true);
        $data["image"] = json_decode($data["image"],true);
        $this->assign("data",$data);
        $this->assign("cate",$cate);
        $this->assign("curpage",$curpage);
        if(IS_POST){
          $curpage = I('post.curpage');
          $key = I('post.key');
          $val = I('post.val');
            foreach ($key as $k1 => $v1) { //生成属性键值对数组
                foreach ($val as $k2 => $v2) {
                    if($k1==$k2){
                        $attr["$v1"]=explode(' ',$v2);
                    }
                }
            }
          $data["attr"] = json_encode($attr);
          $data["pro_name"] = I('post.pro_name');
          $data["cate"] = I('post.cate');
          $data["content"] = I('post.content');
          $data["price"] = I('post.price');
          $data["new_price"] = I('post.new_price');
          $data["num"] = I('post.num');
          if($_FILES["image"]["name"][0]){//是否有图片上传
            for($i=0;$i<count($data["image"]);$i++){//删除原图片
                  unlink($data["image"][$i]);
                  unlink($data["image"][$i]."thumb.jpg");
                  unlink($data["image"][$i]."water.jpg");
                }
              $upload = new \Think\Upload();// 生成新图片    
              $upload->maxSize   =     3145728 ;// 设置附件上传大小
              $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
              $upload->saveName  =     array('uniqid','');
              $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
              $upload->savePath  =     'product/'; // 设置附件上传（子）目录
              $info   =   $upload->upload(array($_FILES['image']));//存储了图片的信息
              foreach ($info as $k => $v) {
                $arr[] = './Uploads/'.$v['savepath'].$v['savename'];
              }
              $image = new \Think\Image(); 
              foreach ($arr as $k => $v) {
                $image->open($v);
                $image->thumb(100, 100)->save($v.'thumb.jpg');
                $image->open($v)->water('./logo.png')->save($v.'water.jpg');
              }
              $data["image"] = json_encode($arr);
          }
          $info = M('product')->where(array('id'=>$id))->save($data);
          $this->redirect('Product/product_lists?p='.$curpage);
        }
        $this->display();
    }

    /*
     *商品删除
     */
    public function product_delete(){
      $this->checkLevel(11);
    $id = I('get.id');
    $curpage = I('get.curpage');
    $arr = M('product')->where(array('id'=>$id))->find();
    $image = json_decode($arr["image"],true);
      for($i=0;$i<count($image);$i++){
            unlink($image[$i]);
            unlink($image[$i]."thumb.jpg");
            unlink($image[$i]."water.jpg");
      }
      $info = M('product')->where(array('id'=>$id))->delete();
      if($info){
        $this->redirect('Product/product_lists?p='.$curpage);
      }else{
        $this->error("产品删除失败");
      }
  }






}