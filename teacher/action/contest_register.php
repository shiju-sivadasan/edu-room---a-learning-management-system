<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_TEACHER_ID'];	

	$sname=$_POST["sname"];
	$qstn=$_POST["qstn"];
	$opta=$_POST["opta"];
	$optb=$_POST["optb"];
	$optc=$_POST["optc"];
	$optd=$_POST["optd"];
	$answr=$_POST["answr"];
	$mrk=$_POST["mrk"];
	$date=date("Y-m-d");
	
	$qno=$_POST["qno"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../post/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
				
	$sql = "insert into contest(Log_Id,sname,qstn,opta,optb,optc,optd,answr,mrk,date,photo,qno)values('$Log_Id','$sname','$qstn','$opta','$optb','$optc','$optd','$answr','$mrk','$date','$photo','$qno')";
	$q1 = $db->prepare($sql);
	$q1->execute();	


	header("location:../contest_view.php");
?>
