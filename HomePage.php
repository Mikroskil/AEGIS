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
		<title>Home Page</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
        <link href="css/style.css" rel="stylesheet">
        
	</head>

	<body>
		<header id="main-header">
        	<div class="navbar navbar-inverse navbar-fixed-top">
                <nav class="navbar-inner">
                	<div class="container">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="profil.html">Profile</a></li>
                            <li><a href="GroupPage.html">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li> 
                            <li><a href="#"><?php echo "$username"?></a></li>
                            <li><a href="logout.php">Logout</a></li>              	
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>
    
    	<section class="container content">
    		<div class="row content2">
            	<div class="span8">
                	<div id="calendar">
					</div>
				</div>
                <div class="span4">
                </div>
            </div>
    	</section>
    
    	<footer>
        	<div id="main-footer">
            			    Provided By AEGIS TEAM<br>
                            <a href="www.mikroskil.ac.id">Mikroskil</a>
            </div>
    	</footer>
        
        <script type='text/javascript' src='jquery/jquery-1.10.2.min.js'></script>
		<script type='text/javascript' src='js/fullcalendar.min.js'></script>
        <script> $(document).ready(function() {
    		$('#calendar').fullCalendar({
    			events : 'getEvent.php',
				eventMouseover: function(calEvent, domEvent) {
					var layer =	"<div id='events-layer' class='fc-transparent' style='position:absolute; width:100%; height:100%; top:-1px; text-align:right; z-index:100'></div>";
					$(this).append(layer);
}
			})
		});
        </script>
        
	</body>
 </html>
