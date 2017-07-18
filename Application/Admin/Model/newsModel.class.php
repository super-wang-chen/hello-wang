<?php
namespace Admin\Model;
use Think\Model;
class newsModel extends Model{
	//自动验证
	protected $_validate = array(
			array('title','require','标题必须！'), 
			array('author','require','作者必须！'),
			array('content','require','内容必须！'), 
	);
	
}