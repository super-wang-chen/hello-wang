<?php
namespace Admin\Controller;
use Think\Controller;
class SingleController extends PublicController {
  /*
   *添加轮播图
   */
  public function banner_add(){
    $this->checkLevel(16);
  	if(IS_POST){
  		$data["pro_id"] = I('post.pro_id');
      $data["create_time"]=time();
  		$info = M('product')->where("`id`=".$data["pro_id"])->find();
  		if($info){
  			$upload = new \Think\Upload();// 实例化上传类    
        	$upload->maxSize   =     3145728 ;// 设置附件上传大小
        	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        	$upload->saveName  =     array('uniqid','');
        	$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        	$upload->savePath  =     'banner/'; // 设置附件上传（子）目录
       	    $info   =   $upload->upload();//存储了图片的信息
        	$data['image'] = './Uploads/'.$info['image']['savepath'].$info['image']['savename'];
        	//echo $data['image'];die;
        	$result = M('banner')->add($data);
        	if($result){
       	    	$this->redirect('Single/banner_add');
       	    }else{
       	    	$this->error("轮播图添加失败");
       	    }
  		}else{
  			$this->error("所关联的产品不存在");
  		}
  	}
  	$this->display();
  }

  /*
   *轮播图列表
   */
  public function banner_lists(){
    $this->checkLevel(17);
  	$banner = M('banner')->select();
  	for($i=0;$i<count($banner);$i++){
  		$banner[$i]["pro_name"] = M('product')->field('pro_name')->where(array('id'=>$banner[$i]["pro_id"]))->find();
  	}
  	$this->assign("banner",$banner);
  	$this->display();
  }

  /*
   *轮播图删除
   */
  public function banner_delete(){
    $this->checkLevel(18);
      $id = I('get.id');
      $arr = M('banner')->where(array('id'=>$id))->find();
      $info = M('banner')->where(array('id'=>$id))->delete();
      if($info){
      	unlink($arr["image"]);
        $this->redirect('Single/banner_lists');
      }else{
        $this->error("轮播图删除失败");
      }
  }

  /*
   *品牌介绍
   */
  public function brand(){
    $this->checkLevel(19);
    $data = M('brand')->where('id=1')->find();
    $this->assign("data",$data);
    $this->display();
  }

  /*
   *品牌介绍修改
   */
  public function brand_update(){
    $this->checkLevel(20);
    $data = M('brand')->where('id=1')->find();
    if(IS_POST){
      $data["content"]=$_POST["content"];
      if($_FILES["image"]["name"]){
          unlink($data["image"]);
          $upload = new \Think\Upload();// 实例化上传类    
          $upload->maxSize   =     3145728 ;// 设置附件上传大小
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
          $upload->saveName  =     array('uniqid','');
          $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
          $upload->savePath  =     'brand/'; // 设置附件上传（子）目录
          $info   =   $upload->upload();//存储了图片的信息
          $data['image'] = './Uploads/'.$info['image']['savepath'].$info['image']['savename'];
      }
      $info=M('brand')->where('id=1')->save($data);
        $this->redirect('Single/brand');
    }
    $this->assign("data",$data);
    $this->display();
  }

  /*
   *公司联系方式
   */
  public function contact(){
    $this->checkLevel(21);
    $data = M('contact')->where('id=1')->find();
    $this->assign("data",$data);
    $this->display();
  }
  /*
   *修改公司联系方式
   */
  public function contact_update(){
    $this->checkLevel(22);
    $data = M('contact')->where('id=1')->find();
    if(IS_POST){
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->saveName  =     array('uniqid','');
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     'contact/'; // 设置附件上传（子）目录
      $data["url"]=I('post.url');
      $data["phone"]=I('post.phone');
      $data["qq"]=I('post.qq');
      $data["email"]=I('post.email');
      $data["address"]=I('post.address');
      if($_FILES["official_image"]["name"]){
        unlink($data["official_image"]);
       
        $info1   =   $upload->uploadOne($_FILES["official_image"]);//存储了图片的信息
        $data['official_image'] = './Uploads/'.$info1['savepath'].$info1['savename'];
      }
      if($_FILES["service_image"]["name"]){
        unlink($data["service_image"]);
        
        $info2   =   $upload->uploadOne($_FILES["service_image"]);//存储了图片的信息
        $data['service_image'] = './Uploads/'.$info2['savepath'].$info2['savename'];
      }
      $info=M('contact')->where('id=1')->save($data);
      $this->redirect('Single/contact');
    }
    $this->assign("data",$data);
    $this->display();
  }

  /*
   *留言列表
   */
  public function message(){
    $this->checkLevel(23);
    $data1 = M('message'); // 实例化User对象
        $data = $data1->order('time desc')->page($_GET['p'].',5')->select();
        $count      = $data1->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
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
          $data[$i]["time"] = date("y-m-d h:i:s",$data[$i]["time"]);
          $data[$i]["message"] = substr($data[$i]["message"],0,20);
        }

        if(IS_AJAX){
          echo json_encode(array('lists'=>$data,'show'=>$show,'curpage'=>$curpage));
          die;
        }
        
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->assign('curpage',$curpage);
    $this->display();
  }

  /*
   *查看留言
   */
  public function message_look(){
    $this->checkLevel(23);
    $id=I('get.id');
    $curpage=I('get.curpage');
    $data=M('message')->where(array("id"=>$id))->find();
    $this->assign("message",$data);
    $this->assign("curpage",$curpage);
    $this->display();
  }

  /*
   *删除留言
   */
  public function message_delete(){
    $this->checkLevel(24);
    $id = I('get.id');
    $curpage = I('get.curpage');
      $info = M('message')->where(array('id'=>$id))->delete();
      if($info){
        $this->redirect('Single/message?p='.$curpage);
      }else{
        $this->error("留言删除失败");
      }
  }





}