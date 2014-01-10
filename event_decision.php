<?php
include "koneksi.php";
if($_GET['acc']=="1"){
	mysql_query("UPDATE event SET status=1 WHERE event_ID=$_GET[id]");
}
else if($_GET['acc']=="0"){
	mysql_query("UPDATE event SET status=0 WHERE event_ID=$_GET[id]");
}
header('Location:HomePage.php');
?>