<?php
include "koneksi.php";

$username=$_POST['userID']; 
$password=$_POST['userpassword']; 
$query=mysql_query("select * from user where Username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
$r=mysql_fetch_array($query);
if($cek > 0){
	session_start();
	
	//session_register("userID");
	//session_register("userpass");

$_SESSION[userID]=$r[Username];
$_SESSION[userpass]=$r[password];
header ('Location:HomePage.php');
}
else{
	echo "error".$_SESSION[userID];
}
?>