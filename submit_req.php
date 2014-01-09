<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['userID'])) {
header('location:login.php'); }
else { $username = $_SESSION['userID']; }
require_once("koneksi.php");

$query = mysql_query("SELECT grup_ID FROM user WHERE Username = '$username'");
$hasil = mysql_fetch_array($query);
$grupID = $hasil[0];

$query1 = mysql_query("SELECT count(event_ID) as ID FROM event");


$dari = $username;
$status = (int) 2;
$judul = $_POST['title'];
$tanggal = $_POST['meeting'];
$tujuan = $_POST['reason'];

$query = mysql_query("SELECT username FROM `group` natural join `user` where grup_ID = $grupID and NOT Username = '$username'");

if($query === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($baris=mysql_fetch_array($query)){
	mysql_query("insert into event (Dari,Untuk,Title,tanggal,status,ket)values('$username','$baris[0]','$judul','$tanggal','$status','$tujuan')");
}
echo "Submit berhasil. <a href=\"grouppage.php\">back</a>";
?>