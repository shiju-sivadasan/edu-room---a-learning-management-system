<?php
include('../../connect/db.php');


	$pst_id=$_GET["pst_id"]; 	
	
	
$sql = "update user_post set status='Pending' where pst_id='$pst_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../post_verify.php");

?>						

