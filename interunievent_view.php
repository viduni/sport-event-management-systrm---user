<?php 
include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sports Event Management Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="CSS\style.css"></link>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	#b{text-decoration:none;}
	#b:link{color:#000000;}
	#b:visited{color:#000000;}
	#b:hover{color:#000000;}
    #b:active{color:#000000;}
  </style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="home.php" class="w3-bar-item w3-button"><b>SABRA</b> Souls</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="home.php" class="w3-bar-item w3-button" id="b">Home</a>
      <a href="unievent_view.php" class="w3-bar-item w3-button" id="b">UniversityEvents</a>
      <a href="interunievent_view.php" class="w3-bar-item w3-button" id="b">InterUniversityEvents</a>
	   <a href="newsFeed_view.php" class="w3-bar-item w3-button" id="b">NewsFeed</a> 
	   <a href="user_booking.php" class="w3-bar-item w3-button" id="b">Booking</a>
	   
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/a1.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>SABRA</b></span> <span class="w3-hide-small w3-text-light-grey">Souls</span></h1>
  </div>
</header>
<br>
<br>
<div class="container-fluid text-center">    
  
	<!-- Center -->
	<div class="col-sm-12 text-left"> 
      <h1>Inter University Events</h1>
	  <br>
	  <br>
	<?php
	
	include 'dbh.php';
	$sql="SELECT * from interuniversityevents ORDER BY dateOF DESC";
	$view = $conn->query($sql);
	while($row = $view->fetch_assoc()){
	echo '<div class="col-sm-12 text-left"> 
      
      <div class="w3-display-container">
        <div class="well w3-center">
       <div class="w3-display-container-fluid">
        
		<p style="background-color:#bf8040;"><b>'.$row["eventname"].'</b></p>
		<p>'.$row["dateOF"].' | '.$row["timeOF"].' hours'.'</p>
		<p>'.$row["venue"].'</p>
       
       </div>
	   
    </div>
        
      </div>
      
      
    </div>';
	}
	?>
	<br>
<footer class="container-fluid text-center">
  <p>www.SabraSouls.com</p>
</footer>
