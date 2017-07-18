<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends PublicController {
  /*
   *新闻列表
   */
	public function index(){
        $this->checkLevel(5);
        $data1 = M('news'); // 实例化User对象
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
	 * 新闻添加
	 */
	public function news_add(){
    $this->checkLevel(4);
		if(IS_POST){
			$upload = new \Think\Upload();// 实例化上传类    
	        $upload->maxSize   =     3145728 ;// 设置附件上传大小
	        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->saveName  =     array('uniqid','');
	        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
	        $upload->savePath  =     'news/'; // 设置附件上传（子）目录
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
	        $data["title"]=I('post.title');
	        $data["author"]=I('post.author');
	        $data["create_time"]=time();
	        $data["content"] = $_POST["content"];
       	  $data["image"] = json_encode($arr); 
       	  $news = D("news")->add($data);
       	    if($news){
       	    	$this->redirect('News/index?p=1');
       	    }else{
       	    	$this->error("新闻添加失败");
       	    }
		}
		$this->display();
	}

  /*
   *新闻修改
   */
  public function news_update(){
    $this->checkLevel(6);
    if($_GET['id']){
      $id = I('get.id');
    }else{
      $id = I('post.id');
    }
    $curpage = I('get.curpage');
    $data = M('news')->where(array('id'=>$id))->find();
    $data["image"] = json_decode($data["image"],true);
    $this->assign("curpage",$curpage);
    $this->assign("data",$data);
    if(IS_POST){
      $curpage = I('post.curpage');
      $data["title"] = I('post.title');
      $data["author"] = I('post.author');
      $data["content"] = $_POST["content"];
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
          $upload->savePath  =     'news/'; // 设置附件上传（子）目录
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
      $info = D('news')->where(array('id'=>$id))->save($data);
      $this->redirect('News/index?p='.$curpage);
    }
    $this->display();
  }

  /*
   *新闻删除
   */
  public function news_delete(){
    $this->checkLevel(7);
    $id = I('get.id');
    $curpage = I('get.curpage');
    $arr = M('news')->where(array('id'=>$id))->find();
    $image = json_decode($arr["image"],true);
      for($i=0;$i<count($image);$i++){
            unlink($image[$i]);
            unlink($image[$i]."thumb.jpg");
            unlink($image[$i]."water.jpg");
      }
      $info = M('news')->where(array('id'=>$id))->delete();
      if($info){
        $this->redirect('News/index?p='.$curpage);
      }else{
        $this->error("新闻删除失败");
      }
  }













}