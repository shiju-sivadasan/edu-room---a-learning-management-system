<?php
session_start();
if(!isset($_SESSION['SESS_CORDINATOR_ID']) || (trim($_SESSION['SESS_CORDINATOR_ID']) == '')) {
	header("location:../");
	exit();
}

?>
