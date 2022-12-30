<?php
ini_set('memory_limit', '-1');
$sql1 = $conn->prepare("select * from currency_1 where SIGUNNM = ?");
$sql1->bind_param('s', $currency->SIGUNNM );
$result1 = mysqli_query($conn, $sql1);
$data1 = array();
while ($row1 = mysqli_fetch_array($result1)) {
    array_push($data1, array(
        'SIGUNNM'=>$row1[0],
        'CMPNMNM'=>$row1[1],
        'INDUTYPENM'=>$row1[2],
        'REFINEROADNMADDR'=>$row1[3],
        'REFINELOTNOADDR'=>$row1[4],
        'POSTALCODE'=>$row1[5],
        'LATITUDE'=>$row1[6],
        'LONGITUDE'=>$row1[7]));
}
$json1 = json_encode(array('가맹점 정보' => $data1), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
print_r($json1);
?>