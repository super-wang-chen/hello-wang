<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends PublicController {
    public function index(){
    	$cate_all=M('product_cate')->where("pid=0")->select();
    	$cate = I('get.cate')?I('get.cate'):$cate_all[0]["id"];
    	$map["cate"]=$cate;
    	$data1 = M('product'); // 实例化User对象
        $data = $data1->where($map)->order('create_time desc')->page($_GET['p'].',3')->select();
        $count      = $data1->where($map)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page -> setConfig('first','首页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $show = $Page->show();
        //echo $show;die;
        for($i=0;$i<count($data);$i++){
        	$data[$i]["image"] = json_decode($data[$i]["image"])[0];
        }
        if(IS_AJAX){
        	echo json_encode(array('lists'=>$data,'show'=>$show));
        	die;
        }
        $this->assign('show',$show);
        $this->assign('data',$data);
    	$this->assign('cate_all',$cate_all);
    	$this->display();
    }

    public function pro_details(){
    	$id=I('get.id');
    	$cate_all=$cate_all=M('product_cate')->where("pid=0")->select();
    	$product=M('product')->where("id=$id")->find();
    	$image=json_decode($product["image"],true);
    	$attr=json_decode($product["attr"],true);
    	$this->assign('cate_all',$cate_all);
    	$this->assign('product',$product);
    	$this->assign('image',$image);
    	$this->assign('attr',$attr);
    	$this->display();
    }

     public function pro_find(){
        $keyword = I('get.keyword');
        $map["pro_name"]=array('like','%'.$keyword.'%');
        $data1 = M('product'); // 实例化User对象
        $data = $data1->where($map)->order('create_time desc')->page($_GET['p'].',3')->select();
        $count      = $data1->where($map)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page -> setConfig('first','首页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $show = $Page->show();
        //echo $show;die;
        for($i=0;$i<count($data);$i++){
            $data[$i]["image"] = json_decode($data[$i]["image"])[0];
        }
        if(IS_AJAX){
            echo json_encode(array('lists'=>$data,'show'=>$show));
            die;
        }
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->display();
    }
}