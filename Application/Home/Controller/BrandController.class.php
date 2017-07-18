<?php
namespace Home\Controller;
use Think\Controller;
class BrandController extends PublicController {
    public function index(){
    	//var_dump($_COOKIE);die;
    	$data=M('brand')->find();
    	$this->assign('data',$data);
    	$this->display();
    }
}