<?php
include "koneksi.php";
$jenis="user";
$query = mysql_query("SELECT max(user_ID) as maxuser_ID FROM user");
$data  = mysql_fetch_array($query);
$kdMax = $data['maxuser_ID'];
$noUrut = (int) substr($kdMax, 4, 5);
$noUrut++;
$kd = $jenis . sprintf("%00005s", $noUrut);

$name = $_POST['fullname'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$tgllahir = $_POST['datebirth'];

if($_POST['kelamin']=="pria"){
$jenis="Pria";}
else if($_POST['kelamin']=="wanita"){
$jenis="Wanita";}

mysql_query("insert into user values('$kd','$name','$email','$user','$pass','$jenis','$tgllahir')");
echo 'Register Berhasil. Silahkan <a href="welcome_page.html">login</a>';
?>