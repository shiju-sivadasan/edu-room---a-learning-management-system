<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
		$sex=$row["sex"];
		$age=$row["age"];
		$cntno=$row["cntno"];
		$photo=$row["photo"];	
		$depart=$row["depart"];	
	}

	$cname=$_POST["cname"];
	$subj=$_POST["subj"];
	$ctgry=$_POST["ctgry"];
	
	$descp=$_POST["descp"];
	$date=date("Y-m-d");
	
	$status="Pending";
	$ptype="Material";
	
	$cmntid="CM".rand(456987,0);
		
		$sql = "insert into user_post(Log_Id,name,sex,age,cntno,photo,cname,subj,ctgry,descp,date,status,ptype,cmntid,depart)values('$Log_Id','$name','$sex','$age','$cntno','$photo','$cname','$subj','$ctgry','$descp','$date','$status','$ptype','$cmntid','$depart')";
		$q1 = $db->prepare($sql);
		$q1->execute();	


	header("location:../post_search_view.php");
?>
