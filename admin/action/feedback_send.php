<?php
	include('../../connect/db.php');
	
	$msg_id=$_POST["msg_id"];
	$reply=$_POST["reply"];
	$rdate=date("Y-m-d");
	
	$sql = "update feedback set reply='$reply',rdate='$rdate' where msg_id='$msg_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../feedback_reply.php");
	
?>
