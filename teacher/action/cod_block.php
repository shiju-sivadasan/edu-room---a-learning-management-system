<?php
include('../../connect/db.php');


	$usr_id=$_GET["usr_id"]; 	
	
	
$sql = "update user set utype='Cordinator' where usr_id='$usr_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../users_search.php");

?>						

