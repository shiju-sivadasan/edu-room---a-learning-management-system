<?php
	include('../../connect/db.php');
	
	$pst_id=$_POST["pst_id"];
	$cname=$_POST["cname"];
	$subj=$_POST["subj"];
	$ctgry=$_POST["ctgry"];
	$descp=$_POST["descp"];
	$date=$_POST["date"];
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../post/" . $_FILES["file"]["name"]);
	$file = $_FILES["file"]["name"];
	
	
	if($file=="")
	{	
		$sql = "update user_post set cname='$cname',subj='$subj',ctgry='$ctgry',descp='$descp',date='$date' where pst_id='$pst_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update user_post set file='$file',cname='$cname',subj='$subj',ctgry='$ctgry',descp='$descp',date='$date' where pst_id='$pst_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	
	header("location:../post_search_view.php");
?>
