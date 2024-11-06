<?php
	include("../../connect/db.php");
	
	
	$Log_Id="MCY".rand(7896547100,2);
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$dob=$_POST["dob"];
	$expr=$_POST["expr"];
	$phone1=$_POST["phone1"];
	$phone2=$_POST["phone2"];
	$email=$_POST["email"];
	$addrs=$_POST["addrs"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$pcode=$_POST["pcode"];
	$depart=$_POST["depart"];
	$desig=$_POST["desig"];
	$jdate=$_POST["jdate"];
	$password=$_POST["password"];
	$quali=$_POST["quali"];
	$date=date("Y-m-d");
	
	$about=$_POST["about"];
	
	$utype="Hod";
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../post/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	$sql = "insert into teacher(Log_Id,name,sex,age,dob,expr,phone1,phone2,email,photo,addrs,city,state,pcode,depart,desig,jdate,password,date,about,utype,quali)values('$Log_Id','$name','$sex','$age','$dob','$expr','$phone1','$phone2','$email','$photo','$addrs','$city','$state','$pcode','$depart','$desig','$jdate','$password','$date','$about','$utype','$quali')";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	header("location:../teacher_search.php");
?>
