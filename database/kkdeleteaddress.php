<?php
	require ('dbconnect.php');

	$AddressNB = $_GET['AddressNB'];
	  
	$sqlselectaddress = "SELECT * FROM address WHERE AddressNB = $AddressNB";
	$rssqlselectaddress = mysqli_query($connect,$sqlselectaddress);
	$rsqlselecraddress = mysqli_fetch_assoc($rssqlselectaddress);
	$rselectaddress1 = $rsqlselecraddress["UserID"];
	$rselectaddress2 = $rsqlselecraddress["UserName"];
	$rselectaddress3 = $rsqlselecraddress["UserAddress"];
	$rselectaddress4 = $rsqlselecraddress["Province"];
	$rselectaddress5 = $rsqlselecraddress["District"];
	$rselectaddress6 = $rsqlselecraddress["Sub_District"];
	$rselectaddress7 = $rsqlselecraddress["Postal_Code"];
	$rselectaddress8 = $rsqlselecraddress["UserPhone"];

	$sqldeleteadd = "DELETE FROM address WHERE AddressNB = $AddressNB";
	$resultdeleteadd = mysqli_query($connect,$sqldeleteadd);

	$sqldeleteadd2 = "DELETE FROM addressselect WHERE UserIDSelect = '$rselectaddress1' AND UserNameSelect = '$rselectaddress2' AND UserAddressSelect = '$rselectaddress3' AND ProvinceSelect = '$rselectaddress4' AND DistrictSelect = '$rselectaddress5' AND Sub_DistrictSelect = '$rselectaddress6' AND Postal_CodeSelect = '$rselectaddress7' AND UserPhoneSelect = '$rselectaddress8'";
	$resultdeleteadd2 = mysqli_query($connect,$sqldeleteadd2);
	if ($rselectaddress8 && $resultdeleteadd2){
		Header("Location: ../home/basket.php");
	} else {
		Header("Location: ../home/basket.php");
	}
?>