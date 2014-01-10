<?php
include "koneksi.php";
if(!isset($_SESSION['userID'])) {
header('location:login.php'); }
else { $username = $_SESSION['userID']; }
require_once("koneksi.php");

$result = mysql_query('SELECT * FROM event ORDER BY tanggal DESC');
if(mysql_num_rows($result) == 0){
	echo "<p style=\"text-align:center\">Tidak Ada Event Baru</p>";
}
else{
	$i=1;
	while ($record = mysql_fetch_assoc($result)) {		
		if($record['status'] == 0 && $record['Untuk'] == "$username"){
			echo "<div id=\"dec\" data-toggle=\"modal\" data-target=\"#ModalDec$i\">Anda menolak sebuah event dari $record[Dari]</div>
			 <div class=\"modal hide fade\" id=\"ModalDec$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4> 
						<br>
						Date : $record[tanggal]
						<br>
						From : $record[Dari]
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		else if($record['status'] == 1 && $record['Untuk'] == "$username"){
			echo "<div id=\"acc\" data-toggle=\"modal\" data-target=\"#ModalAcc$i\">Anda menerima sebuah event dari $record[Dari]</div>
			<div class=\"modal hide fade\" id=\"ModalAcc$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4>
						<br>
						Date : $record[tanggal]
						<br>
						From : $record[Dari]
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		else if($record['status'] == 2 && $record['Untuk'] == "$username"){
			echo "<div id=\"wait\" data-toggle=\"modal\" data-target=\"#ModalWait$i\">Anda mendapat sebuah permintaan pertemuan untuk di konfirmasi dari $record[Dari]</div>
			<div class=\"modal hide fade\" id=\"ModalWait$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4>
						<br>
						Date : $record[tanggal]
						<br>
						From : $record[Dari]
						
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
							<a href=\"event_decision.php?acc=1&id=$record[event_ID]\" role=\"button\" class=\"btn btn-success\">Accept</a>
							<a href=\"event_decision.php?acc=0&id=$record[event_ID]\" role=\"button\" class=\"btn btn-danger\">Decline</a>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		else if($record['status'] == 0 && $record['Dari'] == "$username"){
			echo "<div id=\"dec\" data-toggle=\"modal\" data-target=\"#ModalDec$i\">Permintaan pertemuan anda ditolak oleh $record[Untuk]</div>
			 <div class=\"modal hide fade\" id=\"ModalDec$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4> 
						<br>
						Date : $record[tanggal]
						<br>
						To : $record[Untuk]
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		else if($record['status'] == 1 && $record['Dari'] == "$username"){
			echo "<div id=\"acc\" data-toggle=\"modal\" data-target=\"#ModalAcc$i\">Permintaan pertemuaan anda diterima oleh $record[Untuk]</div>
			<div class=\"modal hide fade\" id=\"ModalAcc$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4>
						<br>
						Date : $record[tanggal]
						<br>
						To : $record[Untuk]
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		else if($record['status'] == 2 && $record['Dari'] == "$username"){
			echo "<div id=\"wait\" data-toggle=\"modal\" data-target=\"#ModalWait$i\">Anda mengirim sebuah permintaan pertemuan kepada $record[Untuk]</div>
			<div class=\"modal hide fade\" id=\"ModalWait$i\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[Title]</h4>
						<br>
						Date : $record[tanggal]
						<br>
						To : $record[Untuk]
					  </div>
					  <div class=\"modal-body\">
						$record[ket]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		
		$i = $i + 1;
		
	}
}
?>