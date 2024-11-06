<?php
include('../../connect/db.php');


	$sender_id=$_POST["sender_id"]; 
	$hname=$_POST['hname'];
	
	$receiver_id=$_POST["receiver_id"];
	$sname=$_POST["sname"]; 
	$sphoto=$_POST["sphoto"]; 
	$smessage=$_POST["smessage"]; 
	$sdatetime=date("m-d H:m:s");
	
	
	$chtsr_id=$_POST["receiver_id"];
	
$sql = "insert into chatm(sender_id,receiver_id,rname,rphoto,rmessage,rdatetime,chtsr_id)values('$sender_id','$receiver_id','$sname','$sphoto','$smessage','$sdatetime','$chtsr_id')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../user_chat.php?chname=$hname");

?>						

