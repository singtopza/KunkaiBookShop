<?php
require ('../database/dbconnect.php');
$BookISBN = $_GET["BookISBN"];
$sql = "UPDATE books SET BookImg1 = '', BookImg2 = '', BookImg3 = '' WHERE BookISBN = '$BookISBN'";
$result = mysqli_query($connect,$sql);
if ($result){
    $message = "ลบข้อมูลรูปภาพตัวอย่างของรหัสหนังสือ $BookISBN แล้ว !";
    echo "<script>alert('$message');</script>";
    echo ("<script>window.location = '../console/forbook_edit.php?BookISBN=$BookISBN';</script>");
} else {
    $message = "พบปัญหาในการใช้งาน ! โปรดติดต่อ ศรัณย์ เวียงสิมมา";
    echo "<script>alert('$message');</script>";
}
?>