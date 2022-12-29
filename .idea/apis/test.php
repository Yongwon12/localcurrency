<?php
$file = "localcurrency.csv";
if (file_exists($file)) {
    $openfile = fopen($file, "r");
    $readByte = 512;
}
if ($openfile) {
    $data = array();
    while (($fgets = fgets($openfile, $readByte))) {
        print_r(json_encode($fgets, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT));
    }
}
?>