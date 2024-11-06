<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];	

	$sname=$_GET["sname"];
	$qstn=$_GET["qstn"];
	$date=date("Y-m-d");
	
	$qst=$_GET["qst"];
	
	$result = $db->prepare("select * from contest where qstn='$qstn'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$answr=$row["answr"];
		$mrk=$row["mrk"];
	}
	
	$result = $db->prepare("select * from contestattend where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$umrk=$row["mrk"];
	}
	
	$results = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++)
	{
		$ssname=$rows["name"];
		$sphoto=$rows["photo"];
	}
	
	$tot=0;	
	if($qst==$answr)
	{
	
		$result = $db->prepare("select * from contest where qstn='$qstn'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
		{
			$mrk=$row["mrk"];
		}	
		$tot=$umrk+$mrk;
		$sql = "update contestattend set mrk='$tot' where Log_Id='$Log_Id' ";
		$q1 = $db->prepare($sql);
		$q1->execute();	
		header("location: ../contest_start5.php?sname=$sname");
		
		
	}
	else
	{
		
		$tot=$umrk+0;
		$sql = "update contestattend set mrk='$tot' where Log_Id='$Log_Id' ";
		$q1 = $db->prepare($sql);
		$q1->execute();	
		header("location: ../contest_start5.php?sname=$sname");
		
	}
	
?>
