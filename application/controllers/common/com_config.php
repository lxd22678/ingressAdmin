<?php
if(ENVIRONMENT == 'production') {
    class COM_Config {
        //手机验证码发送账户信息
        public static $sms_config = array(
            'key' => '24ba38fad4afb81456a872a2da76fb6b',
            'pwd' => '005210',
            'luosimao' => 'api:key-8daadb05ee4353464f74c7ca85e571c0',
            'bechtechak' => 3776,
            'bechtechsk' => '4c37f7574df6ee6adb384357b4fa7c1c2633804e'
        );

        //不需要客户端传送session的方法
        public static $ex_session_config = array(
            "login",
            "register",
            "sendverifycode",
            "findpasswd",
            "update",
            "version"
        );

        //第三方平台配置信息
        public static $platforms_config = array(
            'weibo' => array(
                'akey' => '4063260896',
                'skey' => '026ca82bad32ea929b23707a95d766ca'
            ),
            'qq' => array(
                'aid' => '1101729421',
                'akey' => '6Cf5UhlqSvYne1GL'
            ),
            'weixin' => array(
                'app_id' => 'wx94f17247735537e4',
                'secret_key' => '01067254b5444a5c0bfa2341b13698f6',
                'partner' => '1249587401',
                'partner_secret' => 'cmDC7BT8guUTpcLFYn0zyht6J6Dzkk2w',
                'callback' => 'http://test-server.era-app.cn:8001/pay/wxpay_callback'
            )
        );

        //七牛图片配置数据
        public static $cdn_config = array(
            'ak' => 'ie4JPJ1wDW8xhtVK3BEDRo2-0u7zLoG6M__g9glm',
            'sk' => '1mrbzQfaciqNRevqNbuRXEtESDJgcZ1TIq1WMVIc',
            'bucket' => 'dida',
            'url' => 'http://7xk719.com1.z0.glb.clouddn.com',
            'domain' => 'http://7xk719.com1.z0.glb.clouddn.com'
        );

        //成就点亮配置信息
        public static $achieve_config = array(
            '1' => array( // 建造者
                '1' => 2000,
                '2' => 10000,
                '3' => 30000,
                '4' => 100000,
                '5' => 200000
            ),
            '2' => array(  //链接者
                '6' => 50,
                '7' => 1000,
                '8' => 5000,
                '9' => 25000,
                '10' => 100000
            ),
            '3' => array(   //工程师
                '11' => 150,
                '12' => 1500,
                '13' => 5000,
                '14' => 20000,
                '15' => 50000
            ),
            '4' => array(    //探险家
                '16' => 100,
                '17' => 1000,
                '18' => 2000,
                '19' => 10000,
                '20' => 30000
            ),
            '5' => array(    //守卫者
                '21' => 3,
                '22' => 10,
                '23' => 20,
                '24' => 90,
                '25' => 150
            ),
            '6' => array(    //骇客
                '26' => 2000,
                '27' => 10000,
                '28' => 30000,
                '29' => 100000,
                '30' => 200000
            ),
            '7' => array(    //解放者
                '31' => 100,
                '32' => 1000,
                '33' => 5000,
                '34' => 15000,
                '35' => 40000
            ),
            '8' => array(     //照明者
                '36' => 5000,
                '37' => 50000,
                '38' => 250000,
                '39' => 1000000,
                '40' => 4000000
            ),
            '9' => array(    //心灵控制者
                '41' => 100,
                '42' => 500,
                '43' => 2000,
                '44' => 10000,
                '45' => 40000
            ),
            '10' => array(     //拓荒者
                '46' => 20,
                '47' => 200,
                '48' => 1000,
                '49' => 5000,
                '50' => 20000
            ),
            '11' => array(     //净化者
                '51' => 200,
                '52' => 10000,
                '53' => 30000,
                '54' => 100000,
                '55' => 300000
            ),
            '12' => array(   //重新充能王
                '56' => 100000,
                '57' => 1000000,
                '58' => 3000000,
                '59' => 10000000,
                '60' => 25000000
            ),
            '13' => array(    //旅居者
                '61' => 15,
                '62' => 30,
                '63' => 50,
                '64' => 180,
                '65' => 360
            ),
            '14' => array(    //特种兵
                '66' => 5,
                '67' => 25,
                '68' => 100,
                '69' => 200,
                '70' => 500
            ),
            '15' => array(    //旅行者
                '71' => 10,
                '72' => 100,
                '73' => 300,
                '74' => 1000,
                '75' => 2500
            )
        );

        public static $ache_title = array(
            '1'=>"部署谐振器",
            '2'=>"建立链接",
            '3'=>"放置据点装备",
            '4'=>"入侵据点数量",
            '5'=>"对单一据点持续占领",
            '6'=>"对据点使用入侵",
            '7'=>"占领据点总数",
            '8'=>"控制人群数量",
            '9'=>"建立三角形",
            '10'=>"占领据点",
            '11'=>"摧毁谐振器",
            '12'=>"据点成功补充能量值",
            '13'=>"持续入侵天数",
            '14'=>"完成任务数量",
            '15'=>"行走距离",
        );

        public static $apk_download_url = "http://10.0.0.57/";
        public static $game_version = "1.0000";

        public static $rong_cloud_conf = array(
            "appKey" => "qf3d5gbj31qeh",
            "appSecret" => "uXE97bdrg3d"
        );
    }
} else
    if (ENVIRONMENT == 'development') {
        class COM_Config {
            //手机验证码发送账户信息
            public static $sms_config = array(
                'key' => '24ba38fad4afb81456a872a2da76fb6b',
                'pwd' => '005210',
                'luosimao' => 'api:key-8daadb05ee4353464f74c7ca85e571c0',
                'bechtechak' => 3776,
                'bechtechsk' => '4c37f7574df6ee6adb384357b4fa7c1c2633804e'
            );

            //不需要客户端传送session的方法
            public static $ex_session_config = array(
                "login",
                "register",
                "sendverifycode",
                "findpasswd",
            	"update",
            	"version"
            );

            //第三方平台配置信息
            public static $platforms_config = array(
                'weibo' => array(
                    'akey' => '4063260896',
                    'skey' => '026ca82bad32ea929b23707a95d766ca'
                ),
                'qq' => array(
                    'aid' => '1101729421',
                    'akey' => '6Cf5UhlqSvYne1GL'
                ),
                'weixin' => array(
                    'app_id' => 'wx94f17247735537e4',
                    'secret_key' => '01067254b5444a5c0bfa2341b13698f6',
                    'partner' => '1249587401',
                    'partner_secret' => 'cmDC7BT8guUTpcLFYn0zyht6J6Dzkk2w',
                    'callback' => 'http://test-server.era-app.cn:8001/pay/wxpay_callback'
                )
            );

            //七牛图片配置数据
            public static $cdn_config = array(
                'ak' => 'ie4JPJ1wDW8xhtVK3BEDRo2-0u7zLoG6M__g9glm',
                'sk' => '1mrbzQfaciqNRevqNbuRXEtESDJgcZ1TIq1WMVIc',
                'bucket' => 'dida',
                'url' => 'http://7xk719.com1.z0.glb.clouddn.com',
                'domain' => 'http://7xk719.com1.z0.glb.clouddn.com'
            );

            //成就点亮配置信息
            public static $achieve_config = array(
                '1' => array( // 建造者
                    '1' => 2000,
                    '2' => 10000,
                    '3' => 30000,
                    '4' => 100000,
                    '5' => 200000
                ),
                '2' => array(  //链接者
                    '6' => 50,
                    '7' => 1000,
                    '8' => 5000,
                    '9' => 25000,
                    '10' => 100000
                ),
                '3' => array(   //工程师
                    '11' => 150,
                    '12' => 1500,
                    '13' => 5000,
                    '14' => 20000,
                    '15' => 50000
                ),
                '4' => array(    //探险家
                    '16' => 100,
                    '17' => 1000,
                    '18' => 2000,
                    '19' => 10000,
                    '20' => 30000
                ),
                '5' => array(    //守卫者
                    '21' => 3,
                    '22' => 10,
                    '23' => 20,
                    '24' => 90,
                    '25' => 150
                ),
                '6' => array(    //骇客
                    '26' => 2000,
                    '27' => 10000,
                    '28' => 30000,
                    '29' => 100000,
                    '30' => 200000
                ),
                '7' => array(    //解放者
                    '31' => 100,
                    '32' => 1000,
                    '33' => 5000,
                    '34' => 15000,
                    '35' => 40000
                ),
                '8' => array(     //照明者
                    '36' => 5000,
                    '37' => 50000,
                    '38' => 250000,
                    '39' => 1000000,
                    '40' => 4000000
                ),
                '9' => array(    //心灵控制者
                    '41' => 100,
                    '42' => 500,
                    '43' => 2000,
                    '44' => 10000,
                    '45' => 40000
                ),
                '10' => array(     //拓荒者
                    '46' => 20,
                    '47' => 200,
                    '48' => 1000,
                    '49' => 5000,
                    '50' => 20000
                ),
                '11' => array(     //净化者
                    '51' => 200,
                    '52' => 10000,
                    '53' => 30000,
                    '54' => 100000,
                    '55' => 300000
                ),
                '12' => array(   //重新充能王
                    '56' => 100000,
                    '57' => 1000000,
                    '58' => 3000000,
                    '59' => 10000000,
                    '60' => 25000000
                ),
                '13' => array(    //旅居者
                    '61' => 15,
                    '62' => 30,
                    '63' => 50,
                    '64' => 180,
                    '65' => 360
                ),
                '14' => array(    //特种兵
                    '66' => 5,
                    '67' => 25,
                    '68' => 100,
                    '69' => 200,
                    '70' => 500
                ),
                '15' => array(    //旅行者
                    '71' => 10,
                    '72' => 100,
                    '73' => 300,
                    '74' => 1000,
                    '75' => 2500
                )
            );

            public static $ache_title = array(
                '1'=>"部署谐振器",
                '2'=>"建立链接",
                '3'=>"放置据点装备",
                '4'=>"入侵据点数量",
                '5'=>"对单一据点持续占领",
                '6'=>"对据点使用入侵",
                '7'=>"占领据点总数",
                '8'=>"控制人群数量",
                '9'=>"建立三角形",
                '10'=>"占领据点",
                '11'=>"摧毁谐振器",
                '12'=>"据点成功补充能量值",
                '13'=>"持续入侵天数",
                '14'=>"完成任务数量",
                '15'=>"行走距离",
            );

            public static $apk_download_url = "http://10.0.0.57/";
            public static $game_version = "1.0000";
            
            public static $rong_cloud_conf = array(
                "appKey" => "qf3d5gbj31qeh",
                "appSecret" => "uXE97bdrg3d"
            );
        }
    }