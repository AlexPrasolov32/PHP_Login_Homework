<?php
$number = $_GET['number'];
$i = 0;
$jsonData = file_get_contents('password.json');
$dataArray = json_decode($jsonData, true);
$dataArray1 = [];
foreach ($dataArray['users'] as $value) {
    $dataArray1[$i] = $value;
    $i++;
    if ($i == $number) {
        break;
    }
}
require ('accounts.html');