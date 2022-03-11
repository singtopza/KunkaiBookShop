<?php 
  $sql = "SELECT * FROM imgprofile WHERE UserID = $UserID";
  $result_img = mysqli_query($connect,$sql);
  if($result_img){
    $countrowimgprofile = mysqli_num_rows($result_img);
    if($countrowimgprofile == 1){
      $row = mysqli_fetch_array($result_img);
    }
  } else {
    echo "<script>alert('พบข้อผิดพลาดเกี่ยวกับฐานข้อมูลโปรไฟล์ !');</script>";
  }
?>