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
	while ($record = mysql_fetch_array($result)) {		
		if($record['status'] == 0 & $record['Untuk'] == $username){
			echo "<div id=\"dec\" data-toggle=\"modal\" data-target=\"#ModalDec\">Anda menolak sebuah event</div>
			 <div class=\"modal hide fade\" id=\"ModalDec\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4> 
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
						<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		if($record['status'] == 1 & $record['Untuk'] == $username){
			echo "<div id=\"acc\" data-toggle=\"modal\" data-target=\"#ModalAcc\">Anda menerima sebuah event</div>
			<div class=\"modal hide fade\" id=\"ModalAcc\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4>
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
						<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		if($record['status'] == 2 & $record['Untuk'] == $username){
			echo "<div id=\"wait\" data-toggle=\"modal\" data-target=\"#ModalWait\">Anda mendapat sebuah permintaan pertemuan untuk di konfirmasi</div>
			<div class=\"modal hide fade\" id=\"ModalWait\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4>
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Accept</button>
						<button type=\"button\" class=\"btn btn-primary\">Decline</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		if($record['status'] == 0 & $record['Dari'] == $username){
			echo "<div id=\"dec\" data-toggle=\"modal\" data-target=\"#ModalDec\">Permintaan pertemuan anda ditolak</div>
			 <div class=\"modal hide fade\" id=\"ModalDec\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4> 
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
						<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		if($record['status'] == 1 & $record['Dari'] == $username){
			echo "<div id=\"acc\" data-toggle=\"modal\" data-target=\"#ModalAcc\">Permintaan pertemuaan anda diterima</div>
			<div class=\"modal hide fade\" id=\"ModalAcc\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4>
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
						<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		if($record['status'] == 2 & $record['Dari'] == $username){
			echo "<div id=\"wait\" data-toggle=\"modal\" data-target=\"#ModalWait\">Anda mengirim sebuah permintaan pertemuan</div>
			<div class=\"modal hide fade\" id=\"ModalWait\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">$record[3]</h4>
					  </div>
					  <div class=\"modal-body\">
						$record[6]
					  </div>
					  <div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Accept</button>
						<button type=\"button\" class=\"btn btn-primary\">Decline</button>
					  </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			";
		}
		
		
	}
}
?>