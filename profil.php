<?php
session_start();
if(!isset($_SESSION['userID'])) {
header('location:login.php'); }
else { $username = $_SESSION['userID']; }
require_once("koneksi.php");

$query = mysql_query("SELECT * FROM user WHERE Username = '$username'");
$hasil = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Profil Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">
        
        
	</head>

	<body>
		<header id="main-header">
        	<div class="navbar navbar-inverse navbar-fixed-top">
                <nav class="navbar-inner">
                	<div class="container">
                        <ul class="nav">
                            <li><a href="HomePage.php">Home</a></li>
                            <li class="active"><a href="#">Profile</a></li>
                            <li><a href="GroupPage.php">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li>
                            <li><a href="#"><?php echo $username ?></a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>

    	<section class="container content profil" id="pmain-content">

    		<div class="row">
            	<div class="span5">
            		<div id="profilpic">
						<img src="img/no-img.jpg" width="140px" height="250px" alt="profilpic" />
            		</div>
                </div>
                <div class="span6">
                	<div id="bio">
                	<h2>BIODATA</h2>
                		<div class="biodata span3">
                        	
                			<label for="nama lengkap">Nama Lengkap</label>:
                			<label for="umur">Umur</label>:
                			<label for="jenis kelamin">Jenis Kelamin</label>:
                			<label for="jurusan">Jurusan</label>:
                			<label for="universitas">Universitas</label>:
                			<label for="nim">NIM</label>:
                			<label for="dosen pembimbing">Dosen Pembimbing</label>:
                		</div>
                		<div class="biodata2 span3">

							<label for="nama lengkap"><?php echo $hasil['Nama_Lengkap'] ?></label>
							<label for="umur">22</label>
							<label for="jenis kelamin"><?php echo $hasil['JK'] ?></label>
							<label for="jurusan">Teknik Informatika</label>
							<label for="universitas">STMIK MIKROSKIL</label>
							<label for="nim">121112376</label>
							<label for="dosen pembimbing">Musolini S.Kom</label>
                		</div>

                		</div>

                	</div>
                </div>
            </div>
    	</section>

    	<footer>
        	<div class="navbar">
            	<div class="navbar-inner" id="main-footer">
            			    Provided By AEGIS TEAM<br>
                            <a href="www.mikroskil.ac.id">Mikroskil</a>
            	</div>
            </div>
    	</footer>

        <script src="jquery/jquery.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
	</body>
</html>
