<?php session_start();  
require ('dbconnect.php');

  	$UserID = $_SESSION['UserID'];
	$sqldelete = "DELETE FROM imgprofile WHERE UserID = $UserID;";
	$resultdelete = mysqli_query($connect,$sqldelete);
	if($resultdelete){
		Header("Location: ../home/profile.php");
	}  
?>