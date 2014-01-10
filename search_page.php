<?php
session_start();
require_once("koneksi.php");
if(!isset($_SESSION['userID'])) {
//header('location:login.php'); 
echo "error";}
else { $username = $_SESSION['userID']; 

//require_once("koneksi.php");

//$query = mysql_query("SELECT * FROM user WHERE Username = '$username'");
//$hasil = mysql_fetch_array($query);
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
                            <li><a href="profil.php">Profile</a></li>
                            <li><a href="GroupPage.php">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form action="search_page.php" method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li> 
                            <li><a href="#"><?php echo $_SESSION['userID']?></a></li>
                            <li><a href="logout.php">Logout</a></li>              	
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>
		
        <section class="container content profil" id="main-content">
        <?php
			$search = $_GET['q'];
			
			$query = mysql_query('select * FROM user where Username LIKE "%$search%" ');
			
			if(mysql_num_rows($result) == 0){
				echo "<p style=\"text-align:center\">Tidak Ditemukan</p>";
			}
			else{
				$i = 1;
				while ($record = mysql_fetch_assoc($result)) {
					echo "<div>
						<span>$1</span> <span></span> <span>$record[Nama_Lengkap]</span> <span></span>
					</div>
			";	
			$i = $i + 1;	
				}
			}
			
		?>
      		
        </section>

    	<footer>
            <div id="main-footer">
            			    Provided By AEGIS TEAM<br>
                            <a href="www.mikroskil.ac.id">Mikroskil</a>
            </div>
    	</footer>
<?php
}
?>

