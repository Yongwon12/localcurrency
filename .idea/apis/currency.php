<?php
include_once('../common/include.php');
include_once('../common/encipher.php');
$currency = json_decode(file_get_contents('php://input'));
$conn = getConnection();
if (!$conn) {
    echo 'error server not connection';
}
else {
    if (!$currency->SIGUNNM) {
        echo "SIGUNNM require";
    }elseif ($currency->SIGUNNM == "가평군") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "고양시") {
        require_once('../common/currency_1db.php');
    } elseif ($currency->SIGUNNM == "과천시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "광명시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "광주시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "구리시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "군포시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "동두천시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "부천시") {
        require_once('../common/currency_1db.php');
    }elseif ($currency->SIGUNNM == "수원시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "안산시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "안성시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "안양시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "양평군") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "여주시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "연천군") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "오산시") {
        require_once('../common/currency_2db.php');
    }elseif ($currency->SIGUNNM == "용인시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "의왕시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "이천시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "파주시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "포천시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "하남시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "화성시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "남양주시") {
        require_once('../common/currency_3db.php');
    }elseif ($currency->SIGUNNM == "의정부시") {
        require_once('../common/currency_4db.php');
    }elseif ($currency->SIGUNNM == "평택시") {
        require_once('../common/currency_4db.php');
    }elseif ($currency->SIGUNNM == "양주시") {
        require_once('../common/currency_4db.php');
    }elseif ($currency->SIGUNNM == "김포시") {
        require_once('../common/currency_5db.php');
    }elseif ($currency->SIGUNNM == "시흥시") {
        require_once('../common/currency_5db.php');
    }elseif ($currency->SIGUNNM == "성남시") {
        require_once('../common/currency_5db.php');
    }
    if ($result1) {
        echo "complete";
    } else {
        echo "error";
    }

}
?>