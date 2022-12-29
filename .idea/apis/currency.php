<?php

ini_set('memory_limit', '-1');
if (($handle = fopen("localcurrency.csv", "r")) !== FALSE) {
    $csvs = [];
    while(! feof($handle)) {
        $csvs[] = fgetcsv($handle);
    }
    $datas = [];
    $column_names = [];
    foreach ($csvs[0] as $single_csv) {
        $column_names[] = $single_csv;
    }
    foreach ($csvs as $key => $csv) {
        if ($key === 0) {
            continue;
        }
        foreach ($column_names as $column_key => $column_name) {
            $datas[$key - 1][$column_name] = $csv[$column_key];
        }
    }
    $json = json_encode($datas,JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
    fclose($handle);
    var_dump($json);
    

}
?>