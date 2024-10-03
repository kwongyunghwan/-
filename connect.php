<?php

$db_host = "211.218.150.109";
$db_user = "ci2020ohhat";
$db_password = "2020ohhat";
$db_name = "ci2020ohhat";


$con = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속

if ($con->connect_errno) { die('Connection Error : '.$con->connect_error); } // 오류가 있으면 오류 메세지 출력

?>
