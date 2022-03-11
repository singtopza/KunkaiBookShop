<?php
require ('../database/dbconnect.php');
    $UserID = $_POST["UserID"];
    if (isset($UserID)){
      $sqldel = "DELETE FROM users WHERE UserID = $UserID";
      mysqli_query($connect,$sqldel);
      echo "<script>alert('ลูกค้าสมาชิก $UserID ถูกลบออกจากฐานข้อมูลแล้ว');</script>";
      echo ("<script>window.history.go(-1);</script>");
    }
    else {
      echo "Error";
    }
?>