<?php
$host = '0.tcp.jp.ngrok.io:10271';
$dbuser = 'test';
$dbpassword = 'test543!';
$dbname = 'studydp';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link, "SET NAMES utf8");
}else{
    echo "不正確連接資料庫</br>".mysqli_connect_error() ;
}
?>