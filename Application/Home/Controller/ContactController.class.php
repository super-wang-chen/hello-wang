<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends PublicController {
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
	 *留言
	 */
    public function index(){
    	$data=M('contact')->find();
    	if(IS_AJAX){
    		$ver=I('post.ver');
    		$message["time"]=time();
    		$message["name"]=I('post.name');
    		$message["phone"]=I('post.phone');
    		$message["message"]=I('post.message');
    		if ($this->check_verify ( $ver )) {
    			$info=M("message")->add($message);
    			echo 1;die;
    		}else{
    			echo 2;die;
    		}
    	}
    	$this->assign('data',$data);
    	$this->display();
    }
}