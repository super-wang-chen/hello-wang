<?php
namespace Home\Controller;
use Think\Controller;
class MembersController extends Controller {
	/*
	 *会员注册及判断用户名
	 */
    public function create_user(){
    	if(IS_AJAX){
    		$user=I('get.user');
    		$info=M('members')->where(array("user"=>$user))->find();
    		if($info){
    			echo 1;die;
    		}else{
    			echo 2;die;
    		}
    	}
    	$this->display();
    }
    /*
     *邮件发送验证码
     */
    public function send_email(){
    	if(IS_AJAX){
    	 $code = rand(1000,9999);//随机生成一个验证码
         $md_code = md5($code);
         setcookie("emailcode",$md_code,time()+2*60); //将验证码存储在cookie中，并设置两分钟过期
        Vendor('phpmailer.class#phpmailer');
        $mail             = new \PHPMailer();//实例化一个邮件发送类
        $body             = "Verification code：$code";//设置邮件发送内容
        $mail->IsSMTP(); // telling the class to use SMTP 使用smtp协议发送
        $mail->SMTPDebug  = 0;//错误调试：0表示不打开错误调试
        $mail->SMTPAuth   = true;
        $mail->CharSet    = "utf-8";
        $mail->Host       = "smtp.163.com"; // sets the SMTP server 设置发送邮件服务器，如：smtp.qq.com
        $mail->Port       = 25;                    // set the SMTP port for the GMAIL server 邮件发送服务的端口
        $mail->Username   = "18336253749@163.com"; // SMTP account username 发送邮件的邮箱用户名，如：123@qq.com
        $mail->Password   = "sx18336253749";        // SMTP account password 发送邮件的邮箱密码，如：123456，是123@qq.com的密码
        $mail->SetFrom('18336253749@163.com', 'sqq');//设置接收来源，如：123@qq.com
        $mail->AddReplyTo("18336253749@163.com","sqq");//回复邮箱，如果别人按回复按钮，会直接指定的回复邮箱
        $mail->Subject    = "Verification code";//标题,主题
        $mail->MsgHTML($body);//内容使用html格式
        
        $email = $_POST["email"]; //获取需要发送的邮箱地址
        $address =$email;//发送地址，指的是用户注册时填写的地址 */
        
        $mail->AddAddress($address, "用户组");//有多个邮箱地址，使用多次
        // $mail->Send();//发送邮件 
        $mail->Send();

       echo 2;
    	}
    }
    /*
     *检验验证码
     */
    public function check_ver(){
    	$code =md5($_GET["code"]);
	     if($code==$_COOKIE["emailcode"]){
	     	 echo 3;die;
	     }else{
	     	  echo 4;die;
	     }
    }
    /*
     *会员添加
     */
    public function add_user(){
    	$data["user"]=I('post.user');
    	$password=I('post.password');
    	$data["password"]=md5($password);
    	$data["email"]=I('post.email');
    	$data["phone"]=I('post.phone');
    	$data["exp"]=0;
    	$data["vip"]=1;
        $data["integral"]=0;
        $data["coupons"]=0;
    	$data["create_time"]=time();
    	$members=M('members');
    	$res=$members->where(array("user"=>$data["user"]))->find();
    	if($res){
    		$this->error("用户已存在");
    	}else{
    		$info=$members->add($data);
    		session('user',$data["user"]);
            session('user_id',$info);
    		$this->redirect('Index/index');
    	}
    }
    /*
     *会员登录
     */
    public function login(){
    	if(IS_POST){
    		$user=I('post.user');
    		$password=md5($_POST["password"]);
    		$auto=I("post.auto");
    		$map['user|email|phone']=$user;
    		$info=M('members')->where($map)->where(array("password"=>$password))->find();
    		if($info){
    			session('user',$info["user"]);
                session('user_id',$info["id"]);
    			if($auto=="on"){
    				cookie("user",$info["user"],24*3600);
                    cookie("user_id",$info["id"],24*3600);
    			}
    			$this->redirect('Index/index');
    		}else{
    			$this->error("用户名或密码错误");
    		}
    	}
    	$this->display();
    }
    /*
     *会员退出
     */
    public function login_out(){
    	session('user',null);
        session('user_id',null);
    	cookie('user',null);
        cookie('user_id',null);
    	$this->redirect('Index/index');
    }
}