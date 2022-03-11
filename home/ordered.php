<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');

$sqlorderlast = "SELECT OrderLast,OrderNumber FROM orders WHERE UserID = $UserID AND OrderLast = (SELECT MAX(OrderLast) AS OrderLast FROM orders)";
$rsorderlast = mysqli_query($connect,$sqlorderlast);
$rorderlast = mysqli_fetch_assoc($rsorderlast);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/allpage.js"></script>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
              <h5 class="headerordered text-center pb-5">สำเร็จแล้ว...</h5>
              <div class="text-center headeroderedbody pr-5">ขอบคุณสำหรับคำสั่งซื้อของคุณ</div>
              <p></p>
              <div class="text-center headeroderedbody pl-5">สินค้าจะถูกจัดส่งภายใน 3-7 วัน</div>
              <div class="py-5 text-center">
              <img src="../img/thankyou.png" class="pb-5" width="220px">
              <p class="fs18">หมายเลขคำสั่งซื้อ <?php echo $rorderlast["OrderNumber"]; ?><a href="../home/myorder.php" style="text-decoration:none;" class="fs17">&nbsp <strong>ตรวจสอบ</strong></a></p>
              </div>
              <div class="backtohome text-center" id="demo" onclick="backtomyhome()"><strong>กลับสู่หน้าหลัก</strong></div>
              <div class="pdordered"></div>
              <div style="margin-bottom:200px;"></div>
            <!--ช่องว่าง ปิด-->
          </div>
          <?php
require ('../style/footer.php');
?>
<script>
  $(window).on('beforeunload', function(){
  $(window).scrollTop(0);
  });
</script>
<script src="../js/backtoindex.js"></script>
</body>
</html>