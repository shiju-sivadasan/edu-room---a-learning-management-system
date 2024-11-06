<?php
	include("connect/db.php");
	
	
	$Log_Id="STP".rand(7896547,2);
	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$date=date("Y-m-d");
	$depart=$_POST["depart"];
	

	$utype="User";

	$sql = "insert into user(Log_Id,name,cntno,email,password,date,utype,depart)values('$Log_Id','$name','$cntno','$email','$password','$date','$utype','$depart')";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	header("location:login.php");
?>
