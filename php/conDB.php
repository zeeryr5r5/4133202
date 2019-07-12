<?php
//127.0.0.1
$host = "localhost";
$user ="root";
$pass = "";
$db = "db_4133202";


$link = mysqli_connect($host,$user,$pass,$db); 
echo$link?"connected !! ":"connection Error .";

$strSQL= "SET NAMES utf8";
mysqli_query($link,$strSQL) or die(mysql_error($link));


?>