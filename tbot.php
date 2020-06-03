<?php 

function bot_start($param){
	global $token;
	$token = $param;
	return json_decode(file_get_contents('php://input'));
}

function bot($method, $params){
	global $token, $url;
	if (!$url){
		$url = 'https://api.telegram.org';
	}
	if ($params){
		$result = file_get_contents($url.'/bot'.$token.'/'.$method.'?'.http_build_query($params));
	}else{
		$result = file_get_contents($url.'/bot'.$token.'/'.$method);
	}
	return $result;
}