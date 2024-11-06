<?php
include('../../connect/db.php');


	$cnt_id=$_GET["cnt_id"]; 	
	
	
$sql = "update contestattend set status='Win' where cnt_id='$cnt_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../contest_participate.php");

?>						

