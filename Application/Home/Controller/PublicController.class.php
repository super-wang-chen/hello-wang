<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function __construct(){
    	parent::__construct();
    	if(empty($_SESSION["user"])&&!empty($_COOKIE["user"])){
    		$_SESSION["user"]=$_COOKIE["user"];
    		$_SESSION["user_id"]=$_COOKIE["user_id"];
    	}
    }

    
}