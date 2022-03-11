<?php session_start();  
include ('dbconnect.php');

  $UserID = $_SESSION['UserID'];
  $newfilename = $UserID.'_'.$_FILES["NameFile"]["name"];
  if(move_uploaded_file($_FILES["NameFile"]["tmp_name"],"../img/userprofile/".$newfilename))
  {
	  $sqldelete = "DELETE FROM imgprofile WHERE UserID = $UserID;";
	  $resultdelete = mysqli_query($connect,$sqldelete);
	  if($resultdelete){
		  $sql = "INSERT INTO imgprofile(UserID,NameFile) VALUES ('$UserID','$newfilename')";
		  $result = mysqli_query($connect,$sql);
		  Header("Location: ../home/profile.php");
	  } else {
		  Header("Location: ../home/profile.php");
	  }
  }
  Header("Location: ../home/profile.php");

	// $temp = explode(".", $_FILES["NameFile"]["name"]);
	// $newfilename = $UserID.'.'.end($temp);
	// if(move_uploaded_file($_FILES["NameFile"]["tmp_name"],"../img/userprofile/".$newfilename))
	// {
	// 	$sqldelete = "DELETE FROM imgprofile WHERE UserID = $UserID;";
	// 	$resultdelete = mysqli_query($connect,$sqldelete);
	// 	if($resultdelete){
	// 		$sql = "INSERT INTO imgprofile(UserID,NameFile) VALUES ('$UserID','$newfilename')";
	// 		$result = mysqli_query($connect,$sql);
	// 		Header("Location: ../home/profile.php");
	// 	} else {
	// 		Header("Location: ../home/profile.php");
	// 	}
	// }
	// Header("Location: ../home/profile.php");
?>