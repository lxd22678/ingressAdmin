<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
date_default_timezone_set('Asia/Shanghai');
require_once(APPPATH."controllers/common/Error.php");
require_once(APPPATH."controllers/common/com_config.php");

class AbstractController extends CI_Controller {
	
	protected $request;
	protected $userId;
	
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * _remap 重新定义action调用规则
	 * @param $method         action函数名
	 */
	public function _remap($_method) {
		log_message("debug", "call ".get_called_class().".".$_method);
		$this->preDispatch($_method);
		$this->$_method();
	}
	
	/**
	 * _output 重新定义输出规则
	 * @param $out            输出html
	 */
	public function _output($_out) {
		echo $_out;
	}
	
	/**
	 *  预处理
	 */
	private function preDispatch($_method) {
		$json = file_get_contents("php://input");
		$this->request = json_decode($json);
		if(!$this->request
			|| !isset($this->request->head) 
			|| !isset($this->request->body)){

			$this->errorExit(\Common\INPUT_ILLIGAL);
        }
        if(!in_array($_method,COM_Config::$ex_session_config)){
            if(!isset($this->request->head->uuid)){
                $this->errorExit(\Common\USER_NOT_LOGIN);
            }
            $session_id = $this->request->head->uuid;
            if($session_id == "0"){
                $this->errorExit(\Common\USER_NOT_LOGIN);
            }
        }
	}
	
	/**
	 * 返回错误
	 */
	protected function errorExit($_errCode)
	{
		$head = array(
				"errCode" => $_errCode,
				"errMsg" => \Common\errMsg($_errCode)
		);
		echo json_encode(array(
				"head"=>$head,
				"body"=>null
		));
		exit;
	}
	
	/**
	 * 设置回包包头
	 */
	protected function head($_errCode, $_errMsg="")
	{
		$head = array(
				"errCode" => $_errCode,
				"errMsg" => $_errMsg
		);
		return $head;
	}
    
	/**
	 * 回包
	 */
	protected function response($_body, $_head=null)
	{
		if($_head == null) $_head = $this->head(0);
		
		echo json_encode(array(
				"head"=>$_head,
				"body"=>$_body
		));
	}
}
