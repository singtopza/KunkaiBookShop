<?php
    require ('../database/dbconnect.php');
    $radioaddress = $_POST["radioaddress"];
    $multiradioaddress = implode(",",$radioaddress);
    $selectaddress = "SELECT * FROM address WHERE AddressNB = $multiradioaddress";
    $rsselectaddress = mysqli_query($connect,$selectaddress);
    $rrsselectaddress = mysqli_fetch_assoc($rsselectaddress);
    $UserIDSelect = $rrsselectaddress["UserID"];
    $UserNameSelect = $rrsselectaddress["UserName"];
    $UserAddressSelect = $rrsselectaddress["UserAddress"];
    $ProvinceSelect = $rrsselectaddress["Province"];
    $DistrictSelect = $rrsselectaddress["District"];
    $Sub_DistrictSelect = $rrsselectaddress["Sub_District"];
    $Postal_CodeSelect = $rrsselectaddress["Postal_Code"];
    $UserPhoneSelect = $rrsselectaddress["UserPhone"];

    $sqldelete = "DELETE FROM addressselect WHERE UserIDSelect = $UserIDSelect";
    $resultdelete = mysqli_query($connect,$sqldelete);

    $insertaddressselect = "INSERT INTO addressselect(UserIDSelect,UserNameSelect,UserAddressSelect,ProvinceSelect,DistrictSelect,Sub_DistrictSelect,Postal_CodeSelect,UserPhoneSelect) 
    VALUE ('$UserIDSelect','$UserNameSelect','$UserAddressSelect','$ProvinceSelect','$DistrictSelect','$Sub_DistrictSelect','$Postal_CodeSelect','$UserPhoneSelect')";
    $rsinsertaddressselect = mysqli_query($connect,$insertaddressselect);
    if($rsinsertaddressselect){
        echo ("<script>window.location = '../home/basket.php';</script>");
        // echo ("<script>window.history.go(-1);</script>");
    }
    else{
        $errors = "ไม่สามารถสมัครสมาชิกได้ โปรดติดต่อ ศรัณย์ เวียงสิมมา";
        echo "<script type='text/javascript'>alert('$errors');</script>";
        echo ("<script>window.location = '../home/basket.php';</script>");
    }
?>