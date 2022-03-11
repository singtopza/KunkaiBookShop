<?php session_start(); 
    require ('dbconnect.php');
    $UserID = $_SESSION['UserID'];
    $newaddname = $_POST["newaddname"];
    $newaddress = $_POST["newaddress"];
    $newaddprov = $_POST["Ref_prov_id"];
    $newadddist = $_POST["Ref_dist_id"];
    $newaddsubdist = $_POST["Ref_subdist_id"];
    $zipcode = $_POST["zip_code"];
    $phone = $_POST["Phone"];

    $sqlprov = "SELECT name_th FROM provinces WHERE id = '$newaddprov'";
    $resultprov = mysqli_query($connect,$sqlprov);
    $rowresultprov = mysqli_fetch_assoc($resultprov);
    $newaddprovid = $rowresultprov["name_th"];

    $sqldist = "SELECT name_th FROM amphures WHERE id = '$newadddist'";
    $resultdist = mysqli_query($connect,$sqldist);
    $rowresultdist = mysqli_fetch_assoc($resultdist);
    $newadddistid = $rowresultdist["name_th"];

    $sqlsubdist = "SELECT name_th FROM districts WHERE id = '$newaddsubdist'";
    $resultsubdist = mysqli_query($connect,$sqlsubdist);
    $rowresultsubdist = mysqli_fetch_assoc($resultsubdist);
    $newaddsubdistid = $rowresultsubdist["name_th"];

    $sql = "INSERT INTO address(UserID,UserName,UserAddress,Province,District,Sub_District,Postal_Code,UserPhone) VALUE ('$UserID','$newaddname','$newaddress','$newaddprovid','$newadddistid','$newaddsubdistid','$zipcode','$phone')";
    $result = mysqli_query($connect,$sql);
    if($result){
        $message = "เพิ่มที่อยู่ใหม่ของคุณแล้ว !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo ("<script>window.location = '../home/basket.php';</script>");
    }
    else{
        $errors = "ไม่สามารถสมัครสมาชิกได้ โปรดติดต่อ ศรัณย์ เวียงสิมมา";
        echo "<script type='text/javascript'>alert('$errors');</script>";
        echo ("<script>window.location = '../home/basket.php';</script>");
    }
?>