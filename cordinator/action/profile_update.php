<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];

	$cntno=$_POST["cntno"];
	$date=$_POST["date"];
	$age=$_POST["age"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$password=$_POST["password"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../post/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	if($photo=="")
	{
		$sql = "update user set date='$date',age='$age',cntno='$cntno',email='$email',addr='$addr',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update user set  date='$date',age='$age',photo='$photo',cntno='$cntno',email='$email',addr='$addr',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();		
	}

	header("location:../index.php");
?>
