<?php
require ('../database/dbconnect.php');
$OrderNumber = $_POST["OrderNumber"];
if (isset($OrderNumber)){
  $sqldel = "DELETE FROM orders WHERE OrderNumber = '$OrderNumber'";
  $check = mysqli_query($connect,$sqldel);
  if (isset($check)){
  echo "<script>alert('ออร์เดอร์ที่ $OrderNumber ถูกลบออกจากฐานข้อมูลแล้ว');</script>";
  echo ("<script>window.location = '../console/fororder.php';</script>");
  } else {
    echo "<script>alert('พบข้อผิดพลาด');</script>";
  }
}
else {
  echo "Error";
}
?>
<script>
  $(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
        return false;
    }
    });
    $(document).on("contextmenu", function (e) {        
        e.preventDefault();
    });
</script>