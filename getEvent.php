<?php
include "koneksi.php";

if($_GET['stat']=="1"){
$result = mysql_query('select * from event where status=1');

while ($record = mysql_fetch_array($result)) {		
		$event_array[] = array(
            'id' => $record['event_ID'],
            'title' => $record['ket'],
            'start' => substr($record['tanggal'],0,10)
		);	
    }

echo json_encode($event_array);
}

else if($_GET['stat']=="2"){
$result = mysql_query('select * from event where status=0');

while ($record = mysql_fetch_array($result)) {		
		$event_array[] = array(
            'id' => $record['event_ID'],
            'title' => $record['ket'],
            'start' => substr($record['tanggal'],0,10)
		);	
    }

echo json_encode($event_array);
}

else if($_GET['stat']=="3"){
$result = mysql_query('select * from event where status=2');

while ($record = mysql_fetch_array($result)) {		
		$event_array[] = array(
            'id' => $record['event_ID'],
            'title' => $record['ket'],
            'start' => substr($record['tanggal'],0,10)
		);	
    }

echo json_encode($event_array);
}
?>