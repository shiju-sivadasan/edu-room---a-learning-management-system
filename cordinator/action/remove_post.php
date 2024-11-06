<?php
	include('../../connect/db.php');
	
	$pst_id=$_GET["pst_id"];
	
	$sql = "delete from user_post where pst_id='$pst_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../post_search_view.php");
?>
