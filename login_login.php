<?php
	//Start session
	session_start();
	
	include('connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qryusr= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='User'");
	$qryusr->execute();
	$countusr = $qryusr->rowcount();
	
	
	$qrycord= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Cordinator'");
	$qrycord->execute();
	$countcord = $qrycord->rowcount();
	
	
	$qrytchr= $db->prepare("SELECT * FROM teacher WHERE email='$email' AND password='$password' AND (utype='Hod' or utype='Teacher')");
	$qrytchr->execute();
	$counttchr = $qrytchr->rowcount();
	
	
	$qrythr= $db->prepare("SELECT * FROM admin WHERE email='$email' AND password='$password' AND utype='Admin'");
	$qrythr->execute();
	$countthr = $qrythr->rowcount();
	//Check whether the query was successful or not
	

	
	
	if($countthr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowthr = $qrythr->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowthr['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}	
	else if($counttchr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowtchr = $qrytchr->fetch();
		$_SESSION['SESS_TEACHER_ID'] = $rowtchr['Log_Id'];
		session_write_close();
		header("location: teacher/index.php");
		exit();
	}
	else if($countcord > 0) {
		//Login Successful
		session_regenerate_id();
		$rowtcord = $qrycord->fetch();
		$_SESSION['SESS_CORDINATOR_ID'] = $rowtcord['Log_Id'];
		session_write_close();
		header("location: cordinator/index.php");
		exit();
	}
	else if($countusr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowusr = $qryusr->fetch();
		$_SESSION['SESS_USER_ID'] = $rowusr['Log_Id'];
		session_write_close();
		header("location: user/index.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password'); window.location='login.php'</script>";
		exit();
	}
?>
