<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$Log_Id=$_SESSION['SESS_TEACHER_ID'];

	$phone2=$_POST["phone2"];
	$email=$_POST["email"];
	$addrs=$_POST["addrs"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$pcode=$_POST["pcode"];
	$password=$_POST["password"];

	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../post/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	if($photo=="")
	{
		$sql = "update teacher set phone2='$phone2',email='$email',addrs='$addrs',city='$city',state='$state',pcode='$pcode',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update teacher set  photo='$photo',phone2='$phone2',email='$email',addrs='$addrs',city='$city',state='$state',pcode='$pcode',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();		
	}

	header("location:../index.php");
?>
