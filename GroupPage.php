<?php
session_start();
if(!isset($_SESSION['userID'])) {
header('location:login.php'); }
else { $username = $_SESSION['userID']; }
require_once("koneksi.php");

 
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
		<header id="main-header" class="container">
        	<div class="container-up navbar navbar-inverse navbar-fixed-top">
                <nav class="navbar-inner">
                	<div class="container">
                        <ul class="nav">
                            <li><a href="HomePage.php">Home</a></li>
                            <li><a href="profil.php">Profile</a></li>
                            <li class="active"><a href="#">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li> 
                            <li><a href="#"><?php echo "$username" ?></a></li>
                            <li><a href="logout.php">Logout</a></li>              	
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>
    
    	<section id="main-content" class="container content">
        	<div id="upper-content" class="container content">
            	<div class="span6">
        			<h1 id="groupname"><a href="#">AEGIS</a></h2>
            		<h4 id="projecttitle"><a href="#">PENGEMBANGAN WEB BIMBINGAN TUGAS AKHIR</a></h4>
            		<div id="buttonpack" class="container">
            			<a href="Struktur.php"><button id="strbutton" class="btn btn-primary btn-lg">Struktur Standar</button></a>
            			<button id="htrbutton" class="btn btn-primary btn-lg" href="history">History</button>
            		</div>
                        

                    <div id="updiv" class="container span6">
                    	<form enctype="multipart/form-data" action="parse_file.php" method="post"> 
							<p>Browse for a file to upload: </p>
							<input type="file" name="uploaded_file">
							<input type="submit" value="Upload It Now">
						</form>
                    </div>
                </div>
                <form action="submit_req.php" method="post">
                <fieldset id="request-box" class="span5">
                <legend>Submit a request</legend>
                <div class="request">
                	<label for="title">Title </label>:
					<input type="text" name="title" required>
                </div>
                <div class="request">
                    <label for="meeting">Time </label>:
					<input type="date" name="meeting" placeholder=" dd/mm/yyyy" required>
                </div>
                <div class="request">
                    <label for="reason">Purpose </label>:
					<input type="text" name="reason" placeholder=" Isikan tujuan pertemuan anda" required>
                	<input id="reqsub" type="submit" name="submit" value="Submit">
                </div>    
                </fieldset>
                </form>
            </div>
            <div id="mid-content" class="container content">
    			<div id="viewer" class="span7 container">
                	<a class="media" href="files/AVX2.pdf">
            	</div>
                <div id="comment-box" class="span4 container">
                	<div id="disqus_thread"></div>
				  		<div id="disqus_thread"></div>
						<p>
						  <script type="text/javascript">
						  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
						  var disqus_shortname = 'bisakomputer'; // required: replace example with your forum shortname
				 
						  /* * * DON'T EDIT BELOW THIS LINE * * */
						  (function() {
						  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						  dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
						  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						  })();
						  </script>
					      <noscript>
					      Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
					      </noscript>
						</p>
                		</div>
					</div>
            	</div>
            </div>
            <div id="right-content" class="container span4">
            	
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
        
        <script type="text/javascript" src="jquery/jquery-1.5.1.min.js"></script>      
		<script type="text/javascript" src="js/jquery.metadata.js"></script>         
		<script type="text/javascript" src="js/jquery.media.js"></script> 
	</body>
</html>
