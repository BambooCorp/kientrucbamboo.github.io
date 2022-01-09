<?php
	header('Content-Type: application/json');
	$json_ugly = '{
		"status": "on",
		"video_link": "https://content.jwplatform.com/manifests/yp34SRmf.m3u8"
	}';
	$json_pretty = json_encode(json_decode($json_ugly), JSON_PRETTY_PRINT);
	echo $json_pretty;
	//echo 'https://content.jwplatform.com/manifests/yp34SRmf.m3u8';
?>