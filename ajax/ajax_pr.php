<?php include 'home.php';
$pic = $_GET['pic'];
$topic = $_GET['topic'];
$detail = $_GET['detail'];
$_FILES["filUpload"] = $_GET['pic'];
$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
