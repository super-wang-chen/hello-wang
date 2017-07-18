<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
	/*
	 *验证登录
	 */
	public function __construct(){
    	parent::__construct();
    	if(empty($_SESSION["username"])&&!empty($_COOKIE["username"])){
    		$_SESSION["username"]=$_COOKIE["username"];
    		$_SESSION["level"]=$_COOKIE["level"];
    	}
    	if(empty($_SESSION["username"])){
            $this->redirect('Index/login');
        }
    }

    /* 
     *验证权限
     */
    public function checkLevel($a){
    	$level=$_SESSION["level"];
    	if(!in_array($a, $level)){
    		echo '<script>alert("Have no legal power ");history.go(-1)</script>';
            die;
    	}
    }




	public function getCategory($pid=0,$category=array(),$level=0){
		  $arr = M('product_cate')->where(array('pid'=>$pid))->select();		  
		if(!empty($arr)){
		 // 循环顶级分类  查找二级分类
		foreach($arr as $k=>$v){
			 //拼接|-
			$str="<span style='color:red'>";
			for($i=0;$i<$level;$i++){
		       $str.="|--";
			}
			$str.="</span>";
			$v["name"]=$str.$v["name"];
		    $category[]=$v; //将顶级分类添加到分类树中
		     $category=$this->getCategory($v["id"],$category,$level+1);
		  }
		}
		  return $category;
    }

    public function deleteCategory($id){
    	$arr = M('product_cate')->where(array('pid'=>$id))->select();
    	if(!empty($arr)){
    		$info = M('product_cate')->where(array('id'=>$id))->delete();
    		foreach ($arr as $k => $v) {
    			$info = $this->deleteCategory($v['id']);
    		}
    	}else{
    		$info = M('product_cate')->where(array('id'=>$id))->delete();
    	}
    	return $info;
    }
}