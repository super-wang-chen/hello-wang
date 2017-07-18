<?php
namespace Admin\Controller;
use Think\Controller;
class MembersController extends PublicController {
	  /*
	   *会员列表
	   */
	  public function lists(){
	  	$this->checkLevel(25);
	    $data1 = M('members'); // 实例化User对象
	        $data = $data1->order('create_time desc')->page($_GET['p'].',5')->select();
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
	   *查看会员
	   */
	  public function members_look(){
	  	$this->checkLevel(25);
	    $id=I('get.id');
	    $curpage=I('get.curpage');
	    $data=M('members')->where(array("id"=>$id))->find();
	    $this->assign("members",$data);
	    $this->assign("curpage",$curpage);
	    $this->display();
	  }

	  /*
	   *删除会员
	   */
	  public function members_delete(){
	  	$this->checkLevel(26);
	    $id = I('get.id');
	    $curpage = I('get.curpage');
	      $info = M('members')->where(array('id'=>$id))->delete();
	      if($info){
	        $this->redirect('Members/lists?p='.$curpage);
	      }else{
	        $this->error("会员删除失败");
	      }
	  }



}