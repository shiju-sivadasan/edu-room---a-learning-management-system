<?php
	include("../../connect/db.php");
	
	$subjct=$_POST["subjct"];
	
	$descp=$_POST["descp"];

	$date=date("Y-m-d");
	date_default_timezone_set("Asia/Kolkata");
	$tme=date('h:i:s A');


	$sql = "insert into notification(subjct,date,tme,descp)values('$subjct','$date','$tme','$descp')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../notification_view.php");
?>
