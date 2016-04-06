<?php
if(ENVIRONMENT == 'production') {
	class DB_Config {
		public static $db_config = array (
				"ingress" => array (
						'hostname' => "rds2l86z021g4i2350x3.pg.rds.aliyuncs.com",
						'port' => 3433,
						'username' => "era",
						'password' => "era_2016",
						'database' => "ingress",
						'dbdriver' => "postgre",
						'dbprefix' => "",
						'pconnect' => TRUE,
						'db_debug' => TRUE,
						'cache_on' => FALSE,
						'cachedir' => "",
						'char_set' => "utf8",
						'dbcollat' => "utf8_general_ci"
				),
				"ingress_statistics" => array(
						'hostname' => "rds2l86z021g4i2350x3.pg.rds.aliyuncs.com",
						'port' => 3433,
						'username' => "era",
						'password' => "era_2016",
						'database' => "ingress_statistics",
						'dbdriver' => "postgre",
						'dbprefix' => "",
						'pconnect' => TRUE,
						'db_debug' => TRUE,
						'cache_on' => FALSE,
						'cachedir' => "",
						'char_set' => "utf8",
						'dbcollat' => "utf8_general_ci"
				)
		);
		public static $redis_config = array(
				// 系统库
				"system"=>array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 0
				),
				"data_item" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_achv" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_energy" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_player_level" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_portal_level" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_slot_level" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				"data_task" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 1
				),
				//游戏库
				"captcha_nickname" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 10
				),
				"cool_time" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 2
				),
				'action_msg' => array(	// 用户行为 消息队列	合并到System
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 0
				),
				'invade_num' => array(   //入侵据点
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 3
				),
				'occupy_num' => array(   //占领据点
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 4
				),
				'continuous_occupy' => array(   //连续入侵据点
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 5
				),
				'single_continuous_occupy' => array(    //点一节点连续入侵
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 6
				),
				// 用户库
				"session" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 7
				),
				"user_energy" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 8
				),
				"user_player" => array(
						'hostname' => "3bf23daa110e4671.m.cnhza.kvstore.aliyuncs.com",
						'port' => 6379,
						'auth' => "3bf23daa110e4671:Eraredis2016",
						'database' => 9
				)
		);
	}
} else
if (ENVIRONMENT == 'development') {
	class DB_Config {
		public static $db_config = array (
				"ingress" => array (
						'hostname' => "10.0.0.57",
						'port' => 5432,
						'username' => "era",
						'password' => "era",
						'database' => "ingress",
						'dbdriver' => "postgre",
						'dbprefix' => "",
						'pconnect' => TRUE,
						'db_debug' => TRUE,
						'cache_on' => FALSE,
						'cachedir' => "",
						'char_set' => "utf8",
						'dbcollat' => "utf8_general_ci"
				),
				"ingress_statistics" => array(
						'hostname' => "10.0.0.57",
						'port' => 5432,
						'username' => "era",
						'password' => "era",
						'database' => "ingress_statistics",
						'dbdriver' => "postgre",
						'dbprefix' => "",
						'pconnect' => TRUE,
						'db_debug' => TRUE,
						'cache_on' => FALSE,
						'cachedir' => "",
						'char_set' => "utf8",
						'dbcollat' => "utf8_general_ci"
				)
		);

		public static $redis_config = array(
				// 系统库
				"system"=>array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 0
				),
				"data_item" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 1
				),
				"data_achv" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 2
				),
				"data_energy" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 3
				),
				"data_player_level" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 4
				),
				"data_portal_level" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 5
				),
				"data_slot_level" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 6
				),
				"data_task" => array(
						'hostname' => "10.0.0.57",
						'port' => 6379,
						'auth' => "000000",
						'database' => 7
				),
// 				"data_sub_task" => array(
// 						'hostname' => "10.0.0.57",
// 						'port' => 6379,
// 						'auth' => "000000",
// 						'database' => 8
// 				),
				//游戏库
				"captcha_nickname" => array( 		// 合并到SYSTEM
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 0
				),
				"cool_time" => array(
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 1
				),
				'action_msg' => array(	// 用户行为 消息队列	合并到System
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 3
				),
				'invade_num' => array(   //入侵据点
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 4
				),
				'occupy_num' => array(   //占领据点
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 5
				),
				'continuous_occupy' => array(   //连续入侵据点
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 6
				),
				'single_continuous_occupy' => array(    //点一节点连续入侵
						'hostname' => "10.0.0.57",
						'port' => 6380,
						'auth' => "000000",
						'database' => 7
				),
				// 用户库
				"session" => array(
						'hostname' => "10.0.0.57",
						'port' => 6381,
						'auth' => "000000",
						'database' => 0
				),
				"user_energy" => array(
						'hostname' => "10.0.0.57",
						'port' => 6381,
						'auth' => "000000",
						'database' => 1
				),
				"user_player" => array(
						'hostname' => "10.0.0.57",
						'port' => 6381,
						'auth' => "000000",
						'database' => 2
				),
// 				"user_item" => array(
// 						'hostname' => "10.0.0.57",
// 						'port' => 6381,
// 						'auth' => "000000",
// 						'database' => 3
// 				)
		);
	}
}
