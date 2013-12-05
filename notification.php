<?php
include "koneksi.php";
$result = mysql_query('SELECT * FROM event ORDER BY tanggal DESC');
if(mysql_num_rows($result) == 0){
	echo "<p style=\"text-align:center\">Tidak Ada Event Baru</p>";
}
else{
	while ($record = mysql_fetch_array($result)) {		
		if($record['status'] == 0){
			echo "<div id=\"dec\" data-toggle=\"modal\" data-target=\"#ModalDec\">Anda memiliki sebuah event yang telah ditolak</div>
			 <div class=\"modal fade\" id=\"ModalDec\" tabindex=\"-1\" role\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
					  </div>
					  <div class=\"modal-body\">
						...
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
		else if($record['status'] == 1){
			echo "<div id=\"acc\" data-toggle=\"modal\" data-target=\"#ModalAcc\">Anda memiliki sebuah event yang telah diterima</div>
			<div class=\"modal fade\" id=\"ModalAcc\" tabindex=\"-1\" role\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
					  </div>
					  <div class=\"modal-body\">
						...
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
		else if($record['status'] == 2){
			echo "<div id=\"wait\" data-toggle=\"modal\" data-target=\"#ModalWait\">Anda mendapat sebuah permintaan pertemuan</div>
			<div class=\"modal fade\" id=\"ModalWait\" tabindex=\"-1\" role\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
				  <div class=\"modal-dialog\">
					<div class=\"modal-content\">
					  <div class=\"modal-header\">
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
						<h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
					  </div>
					  <div class=\"modal-body\">
						...
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
		
	}
}
?>