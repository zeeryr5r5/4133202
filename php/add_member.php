<?php
include "conBD.php";


$user = $_POST['user'];
$pass = $_POST['pass'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$fav1 = $_POST['fav1'];
$fav2 = $_POST['fav2'];

//echo $user;
$fav = $fav1 . "," . $fav2;

$strSQL = "INSERT INTO tb_member
           VALUES('$user','$pass','$sex','$fav','$age')";
 mysqli_query($link,$strSQ) or die (mysql_error($link));         

?>

<a href="../add_member.html">back</a>