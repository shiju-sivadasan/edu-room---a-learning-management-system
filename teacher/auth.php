<?php
session_start();
if(!isset($_SESSION['SESS_TEACHER_ID']) || (trim($_SESSION['SESS_TEACHER_ID']) == '')) {
	header("location:../");
	exit();
}

?>
