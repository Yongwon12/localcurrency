<?php
include_once('../common/include.php');
include_once('../common/encipher.php');
$subway = json_decode(file_get_contents('http://api.odcloud.kr/api/15071311/v1/uddi:b3803d43-ffe3-4d17-9024-fd6cfa37c284?page=1&perPage=10&serviceKey=3K7e6liWluE%2F86fs6ueS5hz2sYBTuCmpQueo%2B4LQmz5keUq9boEpxMUEoLr8lSSFD6u7dM0a9zxsq%2Bejp1TfCg%3D%3D'));
$json = json_encode($subway,JSON_UNESCAPED_UNICODE,JSON_PRETTY_PRINT);
var_dump($json);
?>