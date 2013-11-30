<?php
session_start();
include "koneksi.php";

$username=$_POST['userID']; 
$password=$_POST['userpassword']; 
$query=mysql_query("select * from user where Username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek==1){ 
$_SESSION['userID']=$username;
header ('Location:HomePage.php');
}
?>