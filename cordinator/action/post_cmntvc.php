<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$pst_id=$_POST["pst_id"];
	
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];
	$name=$_POST["name"];
	
	$sex=$_POST["sex"];
	$photo=$_POST["photo"];
	
	$cname=$_POST["cname"];
	$descp=$_POST["descp"];
	
	$cmntid=$_POST["cmntid"];
		
	$date=date("Y-m-d");
		
	$sql = "insert into user_cmnt(Log_Id,name,sex,photo,cname,descp,date,cmntid)values('$Log_Id','$name','$sex','$photo','$cname','$descp','$date','$cmntid')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../user_pdf_comment.php?pst_id=$pst_id");
?>
