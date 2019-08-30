<?php 
	include 'dbh.php';
	$eventname=$_POST['eventname'];
	$dateOF=$_POST['dateOF'];
	$timePeriod=$_POST['timePeriod'];
	$userName=$_POST['userName'];
	$userPost=$_POST['userPost'];
	$email=$_POST['email'];
	
	
	$sql="INSERT INTO user_basketballcourt(eventname,dateOF,timePeriod,userName,userPost,email) VALUES ('$eventname','$dateOF','$timePeriod','$userName','$userPost','$email')";
	$result=$conn->query($sql);
	
	header('Location:book_basketballcourt.php');
?>