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
		<title>Group Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<header id="main-header">
        	<div class="navbar navbar-inverse navbar-fixed-top">
                <nav class="navbar-inner">
                	<div class="container">
                        <ul class="nav">
                            <li><a href="HomePage.php">Home</a></li>
                            <li><a href="profil.html">Profile</a></li>
                            <li class="active"><a href="#">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li> 
                            <li><a href="#"><?php echo"$username"?></a></li>
                            <li><a href="logout.php">Logout</a></li>              	
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>
    
    	<section class="container content dropingdown">
    		<div class="row">
            	<div class="span7">
					<p class="group-name">Group Name</p>
					
                </div>
				<div class="span12 sreq">
					<a class="srequest" href="#">Submit a Request</a>
				</div>
            </div>
			<div class="row">
				<div class="span12">
				<h1 class=test=>Project Title</h1>
				<a class="box done padall10" href="#">Step 1</a><a class="box active padall10" href="#">Step 2</a><a class="box passive padall10" href="#">Step 3</a><a class="box passive padall10" href="#">Step 4</a>
				</div>
			</div>
			<div class="row martop15">
				<div class="span7 box">
				asdasdasdasda
				</div>
				<div class="span5 box">
				asdasdasd
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
        
        <script src="jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script src="jquery/jquery.prizmcloud.min.js"></script>
	</body>
</html>
