<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$this->display();
	}
	/*
	 *生成验证码
	 */
	public function ver() {
		
		$Verify = new \Think\Verify ();
		$Verify->entry ();
	}
	/*
	 *验证验证码
	 */
	function check_verify($code, $id = '') {
		$verify = new \Think\Verify ();
		
		return $verify->check ( $code, $id );
	}
	/*
	 *登录页面
	 */
	public function login(){
		if(IS_AJAX){
			$username=I('post.username');
			$password=md5(I('post.password'));
			$ver=I('post.ver');
			$rem=I('post.rem');
			if ($this->check_verify ( $ver )) {
				$map['username'] = $username;
				$map['password'] = $password;
				$info = M('admin')->where($map)->find();
				if($info){
					session('username',$info["username"]);
					session('level',json_decode($info["level"],true));
					if($rem==1){
						cookie('username',$info["username"]);
					    cookie('level',json_decode($info["level"],true));
					}
					$this->ajaxReturn(3);die;
				}else{
					$this->ajaxReturn(2);die;
				}
		    } else {
			    $this->ajaxReturn(1);
			    die;
		    }
		}
		$this->display();
	}

	public function loginout(){
		session('username',null);
        session('level',null);
    	cookie('username',null);
        cookie('level',null);
    	$this->redirect('Index/login');
	}
	
    
}