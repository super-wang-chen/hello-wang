<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index(){
    	$banner=M('banner')->order('create_time desc')->limit(3)->select();
    	$product=M('product')->order('create_time desc')->limit(8)->select();
    	for($i=0;$i<count($product);$i++){
            $product[$i]["image"] = json_decode($product[$i]["image"])[0];
        }
        $this->assign('banner',$banner);
        $this->assign('product',$product);
    	$this->display();
    }
}