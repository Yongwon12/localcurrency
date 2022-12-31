<?php
include_once('../common/include.php');
include_once('../common/encipher.php');
$currency = json_decode(file_get_contents('php://input'));
$conn = getConnection();
$info = $currency->SIGUNNM;
if (!$conn) {
    echo 'error server not connection';
}
else {
    if(!$info) {
        echo "SIGUNNM require";
    }else
    {
        if($info == "가평군" or "고양시"
        or "과천시" or "광명시" or "광주시" or "구리시" or "군포시"
        or "동두천시" or "부천시") {
            require_once('../common/currency_1db.php');
            $json1 = json_encode(array('storeList' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
            print_r($json1);
        }
        if ($info == "수원시" or "안산시" or "안성시"
            or "안양시" or "양평군" or "여주시" or "연천군" or "오산시") {
            require_once('../common/currency_2db.php');
            $json1 = json_encode(array('storeList' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
            print_r($json1);
        }
        if ($info == "용인시" or "의왕시" or "이천시"
            or "파주시" or "포천시" or "하남시" or "화성시" or "남양주시") {
            require_once('../common/currency_3db.php');
            $json1 = json_encode(array('storeList' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
            print_r($json1);
        }
        if ($info == "의정부시" or "평택시" or "양주시") {
            require_once('../common/currency_4db.php');
            $json1 = json_encode(array('storeList' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
            print_r($json1);
        }
        if ($info == "김포시" or "시흥시" or "성남시") {
            require_once('../common/currency_5db.php');
            $json1 = json_encode(array('storeList' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
            print_r($json1);
        }
    }
}
?>