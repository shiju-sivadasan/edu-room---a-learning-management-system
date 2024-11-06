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
	$date=$_POST["date"];
	
	$status="Pending";
	$ptype="Video";
	
	$cmntid="CM".rand(456987,0);
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../post/" . $_FILES["file"]["name"]);
	$file = $_FILES["file"]["name"];
	
	
	
		
		$sql = "insert into user_post(Log_Id,name,sex,age,cntno,photo,cname,subj,ctgry,descp,file,date,status,ptype,cmntid,depart)values('$Log_Id','$name','$sex','$age','$cntno','$photo','$cname','$subj','$ctgry','$descp','$file','$date','$status','$ptype','$cmntid','$depart')";
		$q1 = $db->prepare($sql);
		$q1->execute();	


	header("location:../post_search_view.php");
?>
