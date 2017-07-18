<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends PublicController {
  /*
   *待发货
   */
  public function index(){
    $this->checkLevel(27);
    $data1 = M('order'); // 实例化User对象
        $data = $data1->where(array("delivery"=>"待发货"))->order('create_time desc')->page($_GET['p'].',5')->select();
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

        for($i=0;$i<count($data);$i++){
          $data[$i]["time"] = date("y-m-d h:i:s",$data[$i]["time"]);
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
     *发货
     */
    public function order_send(){
      $this->checkLevel(27);
    	$id=I('get.id');
    	$info=M('order')->where(array("id"=>$id))->save(array("delivery"=>"已发货"));
    	if($info){
    		echo 1;die;
    	}else{
    		echo 2;die;
    	}
    }

  /*
   *已发货
   */
  public function sended(){
    $this->checkLevel(27);
    $data1 = M('order'); // 实例化User对象
        $data = $data1->where(array("delivery"=>"已发货"))->order('create_time desc')->page($_GET['p'].',5')->select();
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

        for($i=0;$i<count($data);$i++){
          $data[$i]["time"] = date("y-m-d h:i:s",$data[$i]["time"]);
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
   *查看订单
   */
  public function order(){
    $this->checkLevel(27);
    $id=I('get.id');
    $curpage=I('get.curpage');
    $state=I('get.state');
    $data=M('order')->where(array("id"=>$id))->find();
    $this->assign("order",$data);
    $this->assign("curpage",$curpage);
    $this->assign("state",$state);
    $this->display();
  }

  /*
   *删除留言
   */
  public function order_delete(){
    $this->checkLevel(28);
    $id = I('get.id');
    $curpage = I('get.curpage');
    $state=I('get.state');
      $info = M('order')->where(array('id'=>$id))->delete();
      if($info){
        $this->redirect('Order/'.$state.'?p='.$curpage);
      }else{
        $this->error("留言删除失败");
      }
  }








}