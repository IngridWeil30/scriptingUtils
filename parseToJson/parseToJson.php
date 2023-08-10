<?php
$fileToParse='./input/data.csv';
$jsonFile = './output/result.json';

if (($handle = fopen($fileToParse, "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $arr[]= ['values' => $data];
    }

    file_put_contents($jsonFile, json_encode($arr), FILE_APPEND);
    fclose($handle);
}