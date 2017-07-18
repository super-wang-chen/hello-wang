<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends PublicController {
	/*
	 *添加管理员
	 */
	public function admin_add(){
		$this->checkLevel(1);
		if(IS_AJAX){
			$username=I('get.username');
			$info=M('admin')->where(array("username"=>$username))->find();
			if($info){
				echo 1;die;
			}else{
				echo 2;die;
			}
		}
		if(IS_POST){
			$data["username"]=I('post.username');
			$data["password"]=md5(I('post.password'));
			$data["email"]=I('post.email');
			$data["level"]=json_encode(I('post.level'));
			$res=M('admin')->add($data);
			if($res){
       	    	$this->redirect('Admin/index');
       	    }else{
       	    	$this->error("管理员添加失败");
       	    }

		}
		$this->display();
	}
	/*
	 *管理员列表
	 */
	public function index(){
		$this->checkLevel(2);
		$data=M('admin')->select();
		$this->assign("data",$data);
		$this->display();
	}

	/*
	 *管理员删除
	 */
	public function admin_delete(){
		$this->checkLevel(3);
		$id=I('get.id');
		$info=M('admin')->where(array("id"=>$id))->delete();
		if($info){
	        $this->redirect('Admin/index');
	      }else{
	        $this->error("管理员删除失败");
	      }
	}



}