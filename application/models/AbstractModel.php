<?php
require_once("db_config.php");

class AbstractModel extends CI_Model {
	
	static public $__redis_map = array();	// Redis连接对象hash表，用于复用连接
	
	public function __construct()
	{
		parent::__construct();
	}
	
	// 获取DB连接
	protected function connectDB($db_name)
	{
		return $this->load->database (DB_Config::$db_config[$db_name], TRUE);
	}
	
	/**
	 * 获取redis连接
	 * @param $redis_name 缓存库
	 * @param $unique 独立连接
	 * @return redis连接
	 */
	protected function connectRedis($redis_name, $unique=false)
	{
		$redis_config = DB_Config::$redis_config[$redis_name];
		$host = $redis_config["hostname"];
		$port = $redis_config["port"];
		$passwd = isset($redis_config["auth"])? $redis_config["auth"] : null;
		$db = isset($redis_config["database"])? $redis_config["database"] : 0;
		
		if(!$unique && isset(self::$__redis_map[$host][$port]))
		{
			$redis = self::$__redis_map[$host][$port];
			if($passwd) $redis->auth($passwd);
			$redis->select($db);
			return $redis;
		}
		else {
			$redis = new Redis();
			$redis->connect($host, $port);
			if($passwd) $redis->auth($passwd);
			$redis->select($db);
			if(!$unique) self::$__redis_map[$host][$port] = $redis;
			return $redis;
		}
	}
}