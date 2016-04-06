<?php
/**
 * @desc 根据两点间的经纬度计算距离
 * @param float $lat 纬度值
 * @param float $lng 经度值
 */
require_once("com_config.php");
function getDistance($lat1, $lng1, $lat2, $lng2)
{
	$earthRadius = 6367000; //approximate radius of earth in meters

	/*
	 Convert these degrees to radians
	to work with the formula
	*/

	$lat1 = ($lat1 * pi() ) / 180;
	$lng1 = ($lng1 * pi() ) / 180;

	$lat2 = ($lat2 * pi() ) / 180;
	$lng2 = ($lng2 * pi() ) / 180;

	/*
	 Using the
	Haversine formula

	http://en.wikipedia.org/wiki/Haversine_formula

	calculate the distance
	*/

	$calcLongitude = $lng2 - $lng1;
	$calcLatitude = $lat2 - $lat1;
	$stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);
	$stepTwo = 2 * asin(min(1, sqrt($stepOne)));
	$calculatedDistance = $earthRadius * $stepTwo;

	return round($calculatedDistance);
}

//使用php执行curl命令
function curl($url, $postData=null) {
	//初始化curl
	$ch = curl_init() or die (curl_error($ch));
	//设置URL参数
	curl_setopt($ch, CURLOPT_URL, $url);
	//要求CURL返回数据
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if ($postData != null) {
		// post数据
		curl_setopt($ch, CURLOPT_POST, 1);
		// post的变量
		$postString = '';
		if (is_array($postData)) {
			$postString = http_build_query($postData);
		} else {
			$postString = $postData;
		}
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
	}
	//执行请求
	$result = curl_exec($ch) or die (curl_error($ch));
	//关闭CURL
	curl_close($ch);
	return $result;
}

//发送短信方法
function sendSMS($mobilephone, $content, $times=0) {
	$smsconfig = COM_Config::$sms_config;
	$pix = '【Ingress】';
	if ($times % 3 == 0) {
		//云片短信
		$smscdkey = $smsconfig['key'];
		$url = "http://yunpian.com/v1/sms/send.json";
		$data = curl($url, array('apikey'=>$smscdkey, 'mobile'=>$mobilephone, 'text'=>$pix.$content));
	} elseif ($times % 3 == 1) {
		//luosimao短信
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://sms-api.luosimao.com/v1/send.json");

		curl_setopt($ch, CURLOPT_HTTP_VERSION  , CURL_HTTP_VERSION_1_0 );
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_HTTPAUTH , CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD  , $smsconfig['luosimao']);

		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array('mobile' => $mobilephone,'message' => $content.$pix));

		$data = curl_exec( $ch );
		curl_close( $ch );
		//$res  = curl_error( $ch );
	} else {
		//bechtech
		$url = "http://sms.bechtech.cn/Api/send/data/json?accesskey=".$smsconfig['bechtechak']."&secretkey=".
			$smsconfig['bechtechsk']."&mobile=".$mobilephone."&content=".urlencode($pix.$content);
		$data = curl($url);
	}

	return $data;
}
