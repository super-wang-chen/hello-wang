<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends PublicController {
    public function index(){
    	$data1 = M('news'); // 实例化User对象
        $data = $data1->order('create_time desc')->page($_GET['p'].',2')->select();
        $count      = $data1->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page -> setConfig('first','首页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $show = $Page->show();
        //echo $show;die;
        for($i=0;$i<count($data);$i++){
        	$data[$i]["image"] = json_decode($data[$i]["image"])[0];
        	$data[$i]["create_time"] = date("y-m-d",$data[$i]["create_time"]);
            $data[$i]["content"]=strip_tags($data[$i]["content"]);
        }
        if(IS_AJAX){
        	echo json_encode(array('lists'=>$data,'show'=>$show));
        	die;
        }
        $this->assign("show",$show);
        $this->assign('data',$data);
    	$this->display();
    }

    public function news_details(){
    	$id=I('get.id');
    	$news=M('news')->where(array('id'=>$id))->find();
    	$image=json_decode($news["image"],true);
    	$pre=M('news')->where("`create_time` > ".$news['create_time'])->order('create_time asc')->limit(1)->find();
    	$next=M('news')->where("`create_time` < ".$news['create_time'])->order('create_time desc')->limit(1)->find();
    	//$info=M('news')->getlastsql();
    	//var_dump($pre);die;
    	//var_dump($image);die;
    	$this->assign("news",$news);
    	$this->assign("pre",$pre);
    	$this->assign("next",$next);
    	$this->assign("image",$image);
    	$this->display();
    }
}