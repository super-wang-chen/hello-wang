<?php
namespace Home\Controller;
use Think\Controller;
class ShoppingController extends PublicController {
	public function __construct(){//验证会员是否登录
		parent::__construct();
		if(empty($_SESSION["user"])){
            $this->redirect('Members/login');
        }
	}
	/*
	 *购物车列表
	 */
    public function index(){
        $user=M('members')->where(array("user"=>$_SESSION["user"]))->find();
        $user_id=$user["id"];
        $data=M('shopping_cart')->where(array("user_id"=>$user_id))->order('create_time desc')->select();
        for($i=0;$i<count($data);$i++){
            $data[$i]["attr"] = json_decode($data[$i]["attr"],true);
            $data[$i]["totle"]=$data[$i]["number"]*$data[$i]["new_price"];
        }
        $this->assign('data',$data);
    	$this->display();
    }
    /*
     *直接购买
     */
    public function pay_cart(){
        $data[0]["pro_id"]=I('get.id');
        $pro=M('product')->where(array('id'=>$data[0]["pro_id"]))->find();
        $data[0]["attr"]=json_decode($_GET["attr"],true);
        $data[0]["number"]=I('get.number');
        $data[0]["user_id"]=$_SESSION["user_id"];
        $data[0]["pro_name"]=$pro["pro_name"];
        $data[0]["image"] = json_decode($pro["image"])[0];
        $data[0]["num"]=$pro["num"];
        $data[0]["price"]=$pro["price"];
        $data[0]["new_price"]=$pro["new_price"];
        $data[0]["total"]=$pro["new_price"]*$data[0]["number"];
        if($_GET["number"]<=$pro["num"]){
            $data[0]["inven"]="有货";
        }else{
            $data[0]["inven"]="无货";
        }
        session("order",$data);
        
        echo 1;die;
    }
    /*
     *加入购物车
     */
    public function add_cart(){
    	$data["pro_id"]=I('get.id');
        $pro=M('product')->where(array('id'=>$data["pro_id"]))->find();
    	if($_GET['attr']){
    		$data["attr"]=$_GET["attr"];
    		$data["number"]=I('get.number');
    	}else{
    		$pro["attr"]=json_decode($pro["attr"],true);
    		$attr=array();
    		foreach ($pro["attr"] as $k => $v) {
    			$attr["$k"]=$v[0];
    		}
    		$data["number"]=1;
    		$data["attr"]=json_encode($attr);
    	}
    	$data["collect"]=0;
    	$data["state"]=0;
        $data["pro_name"]=$pro["pro_name"];
        $data["price"]=$pro["price"];
        $data["new_price"]=$pro["new_price"];
        $data["num"]=$pro["num"];
        $data["image"] = json_decode($pro["image"])[0];
    	$data["create_time"]=time();
    	$data["user_id"]=$_SESSION["user_id"];
    	$info=M('shopping_cart')->add($data);
    	if($info){
    		echo 1;
    	}else{
    		echo 2;
    	}
    }
    /*
     *删除购物车
     */
    public function cart_del(){
        if(IS_AJAX){
            $id=I('get.id');
            $info = M('shopping_cart')->where(array('id'=>$id))->delete();
            if($info){
                echo 1;die;
            }else{
                echo 2;die;
            }
        }
    }
    /*
     *收藏购物车
     */
    public function cart_collect(){
        if(IS_AJAX){
            $id=I('get.id');
            $info = M('shopping_cart')->where(array('id'=>$id))->save(array("collect"=>1));
                echo 3;die;
        }
    }
    /*
     *购物车生成订单
     */
    public function comfirm_order(){
        if(IS_POST){
            if(!empty($_POST["check"])){
                foreach ($_POST["check"] as $k1 => $v1) {
                    $cart=M('shopping_cart')->field('pro_id,attr,number,user_id,pro_name,image,num,price,new_price')->where(array("id"=>$v1))->find();
                    $cart["attr"]=json_decode($cart["attr"],true);
                    foreach ($_POST["id"] as $k2 => $v2) {
                        if($v1==$v2){
                            $cart["number"]=$_POST["number"][$k2];
                        }
                    }
                    $cart["total"]=$cart["number"]*$cart["new_price"];
                    if($cart["number"]<=$cart["num"]){
                        $cart["inven"]="有货";
                    }else{
                        $cart["inven"]="无货";
                    }
                    $data["$k1"]=$cart;
                }
                session("order",$data);
            }else{
                $this->error("请选择商品");
            }
        }
        $address=M('address')->where(array("user_id"=>$_SESSION["user_id"]))->select();
        $user=M('members')->where(array("id"=>$_SESSION["user_id"]))->find();
        $curt=$user["address"];
        $this->assign("address",$address);
        $this->assign("curt",$curt);
        $this->assign("order",$_SESSION['order']);
        //var_dump($_SESSION['order']);die;
        $this->display();
    }
    /*
     *付款
     */
    public function pay(){
        //var_dump($_SESSION["order"]);die;
        $order_num=time().$_SESSION["user_id"];
        $user=M('members')->where(array("id"=>$_SESSION["user_id"]))->find();
        $address=M('address')->where(array("id"=>$user["address"]))->find();
        if(!$address){
            $this->error("请选择地址");
        }
        foreach ($_SESSION["order"] as $k => $v) {
            $data["order_num"]=$order_num;
            $data["pro_name"]=$v["pro_name"];
            $data["image"]=$v["image"];
            $data["number"]=$v["number"];
            $data["price"]=$v["total"];
            $data["create_time"]=time();
            $data["state"]="未支付";
            $data["delivery"]="待发货";
            $data["del"]=0;
            $data["user_id"]=$_SESSION["user_id"];
            $data["pro_id"]=$v["pro_id"];
            $data["name"]=$address["name"];
            $data["phone"]=$address["phone"];
            $data["address"]=$address["address"];
            $data["attr"]=json_encode($v["attr"]);
            $info=M('order')->add($data);
        }
        $order=M('order')->where(array("order_num"=>$order_num))->select();
        $total=0;
        foreach ($order as $k1 => $v1) {
            $total=$total+$v1["price"];
        }
        $pay["order_num"]=$order_num;
        $pay["total"]=$total;
        $pay["phone"]=$address["phone"];
        $pay["name"]=$address["name"];
        $pay["address"]=$address["address"];
        session("pay",$pay);
        $this->assign("order_num",$order_num);
        $this->assign("total",$total);
        $this->display();
    }
    /*
     *付款成功
     */
    public function pay_success(){
        $info=M('order')->where(array("order_num"=>$_SESSION["pay"]["order_num"]))->save(array("state"=>"已支付"));
        $this->display();
    }

    /*
     *会员中心
     */
    public function center(){
        $user=M('members')->where(array('user'=>$_SESSION["user"]))->find();
        if($user["exp"]<500){
            $user["exp"]=floor($user["exp"]/500*19);
        }elseif ($user["exp"]>=500&&$user["exp"]<1000) {
            $user["exp"]=floor(($user["exp"]-500)/500*13)+19;
        }elseif ($user["exp"]>=1000&&$user["exp"]<1600) {
            $user["exp"]=floor(($user["exp"]-1000)/600*12)+32;
        }elseif ($user["exp"]>=1600&&$user["exp"]<2200) {
            $user["exp"]=floor(($user["exp"]-1600)/600*12)+44;
        }elseif ($user["exp"]>=2200&&$user["exp"]<3000) {
            $user["exp"]=floor(($user["exp"]-2200)/800*13)+56;
        }elseif ($user["exp"]>=3000&&$user["exp"]<5000) {
            $user["exp"]=floor(($user["exp"]-3000)/500*13)+69;
        }elseif ($user["exp"]>=5000&&$user["exp"]<7000) {
            $user["exp"]=floor(($user["exp"]-5000)/500*18)+82;
        }elseif ($user["exp"]>=7000) {
            $user["exp"]=100;
        }
        $order=M('order')->where("del=0")->where(array('user_id'=>$_SESSION["user_id"]))->order('create_time desc')->limit(1)->select();
        $this->assign("order",$order[0]);
        $this->assign("user",$user);
        $this->display();
    }
    /*
     *我的订单
     */
    public function order_lists(){
        $state = I('get.state')?I('get.state'):"全部";
        if($state!="全部"){
            $map["state"]=$state;
        }
        $map["user_id"]=$_SESSION["user_id"];
        $map["del"]=0;
        $data1 = M('order'); // 实例化User对象
        $data = $data1->where($map)->order('create_time desc')->page($_GET['p'].',2')->select();
        $count      = $data1->where($map)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page -> setConfig('first','首页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $show = $Page->show();
        for($i=0;$i<count($data);$i++){
            $data[$i]["attr"] = "";
        }
        if(IS_AJAX){
            echo json_encode(array('lists'=>$data,'show'=>$show));
            die;
        }
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->display();
    }
    /*
     *删除订单
     */
    public function order_del(){
        if(IS_AJAX){
            $order_num=I('get.id');
            $info = M('order')->where(array('order_num'=>$order_num))->save(array("del"=>1));
            if($info){
                echo 1;die;
            }else{
                echo 2;die;
            }
        }
    }
    /*
     *订单详情
     */
    public function order_details(){
        $order_num=I('get.id');
        $data=M('order')->where(array("order_num"=>$order_num))->select();
        //var_dump($data);die;
        $this->assign("data",$data);
        $this->assign("lists",$data);
        $this->display();
    }

    /*
     *收货地址
     */
    public function address(){
        if(IS_POST){
            $data["user_id"]=$_SESSION["user_id"];
            $data["name"]=I('post.name');
            $data["phone"]=I('post.phone');
            $data["address"]=$_POST['province3']." ".$_POST['city3']." ".$_POST['area3']." ".$_POST['addr'];
            $info=M('address')->add($data);
            if($_POST['check']=="on"){
                $addr=M('members')->where(array("id"=>$_SESSION["user_id"]))->save(array("address"=>$info));
            } 
            $this->redirect('Shopping/address');
        }
        $data=M('address')->where(array("user_id"=>$_SESSION["user_id"]))->select();
        $user=M('members')->where(array("id"=>$_SESSION["user_id"]))->find();
        $addr=$user["address"];
        $this->assign("data",$data);
        $this->assign("addr",$addr);
        $this->display();
    }
    /*
     *删除收货地址
     */
    public function address_del(){
        if(IS_AJAX){
            $id=I('get.id');
            $info = M('address')->where(array('id'=>$id))->delete();
            if($info){
                $address=M('address')->where(array("user_id"=>$_SESSION["user_id"]))->select();
                $res=M('members')->where(array("id"=>$_SESSION["user_id"]))->save(array("address"=>$address[0]["id"]));
                echo 1;die;
            }else{
                echo 2;die;
            }
        }
    }
    /*
     *默认收货地址
     */
    public function address_change(){
        if(IS_AJAX){
            $id=I('get.id');
            $info = M('members')->where(array('id'=>$_SESSION["user_id"]))->save(array("address"=>$id));
            if($info){
                echo 3;die;
            }else{
                echo 4;die;
            }
        }
    }
}