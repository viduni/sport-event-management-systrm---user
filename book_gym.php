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
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> 
.note {
    background-color: #ffb3b3;
    border-left: 6px solid #ff0000;
}
	#a1{text-decoration:none;}
	#a1:link{color:#ffffff;}
	#a1:visited{color:#ffffff;}
	#a1:hover{color:#ffffff;}
    #a1:active{color:#ffffff;}
	
	#b{text-decoration:none;}
	#b:link{color:#000000;}
	#b:visited{color:#000000;}
	#b:hover{color:#000000;}
    #b:active{color:#000000;}
</style>
</head>
<body class="bg-grey">
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="home.php" class="w3-bar-item w3-button"><b>SABRA</b> Souls</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="home.php" class="w3-bar-item w3-button" id="b">Home</a>
      <a href="unievent_view.php" class="w3-bar-item w3-button" id="b">UniversityEvents</a>
      <a href="interunievnt_view.php" class="w3-bar-item w3-button" id="b">InterUniversityEvents</a>
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

<div class="container">
	<h2>Book Gym<h2>
	<form class="form-horizontal" action="inuser_gym.php" method="POST">
	<div class="form-group">
	<label class="control-label col-sm-4" for="eventname">Event Name </label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="eventname" name="eventname" required>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-4" for="date">Date </label>
	<div class="col-sm-8">
		<input type="date" class="form-control"  name="dateOF" required>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-4" for="time">Time Peroid</label>
	<div class="col-sm-8">
		<input type="text" class="form-control"  name="timePeriod" value="Ex: 8.00am-10.00am" required>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-4" for="userName">User Name </label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="userName" required >
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-4" for="userPost">User Post </label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="userPost" required >
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-4" for="email">User Email </label>
	<div class="col-sm-8">
		<input type="email" class="form-control" name="email" required >
	</div>
	</div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn  button" name="submit">Submit</button>
		<button type="submit" class="btn  button" name="view_gym"><a href="adbookgym_viewus.php" id="a1">View Booking</a></button>
		<button type="submit" class="btn  button" name="view_places"><a href="user_booking.php" id="a1">Back to Places</a></button>
      </div>
    </div>
	</form>
		
</div>

<footer class="container-fluid text-center">
  <p>www.SabraSouls.com</p>
</footer>
