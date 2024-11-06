<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$teach_id=$_POST['teach_id'];

	$phone2=$_POST["phone2"];
	$email=$_POST["email"];
	$addrs=$_POST["addrs"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$pcode=$_POST["pcode"];
	
	$depart=$_POST["depart"];
	$expr=$_POST["expr"];
	$desig=$_POST["desig"];
	$quali=$_POST["quali"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../post/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	if($photo=="")
	{
		$sql = "update teacher set phone2='$phone2',email='$email',addrs='$addrs',city='$city',state='$state',pcode='$pcode',depart='$depart',expr='$expr',desig='$desig',quali='$quali' where teach_id='$teach_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update teacher set  photo='$photo',phone2='$phone2',email='$email',addrs='$addrs',city='$city',state='$state',pcode='$pcode',depart='$depart',expr='$expr',desig='$desig' where teach_id='$teach_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();		
	}

	header("location:../teacher_update.php");
?>
