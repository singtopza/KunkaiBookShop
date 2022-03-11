<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/profile.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/allpage.js"></script>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
        <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">บัญชี</h3>
            </div>
            <ul class="list-unstyled components">
                <p class="listboxpfh fs20">ข้อมูลส่วนตัว</p>
                <!-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="homebtn">ข้อมูล</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                  <a href="../home/profile.php" class="listboxpf pl-5 fs16">ข้อมูลโปรไฟล์</a>
                </li>
                <!-- <li>
                  <a href="?B" class="listboxpf pl-5 fs16">แก้ไขโปรไฟล์</a>
                </li> -->
                <li>
                  <a href="../home/myorder.php" class="listboxpf pl-5 fs16" style="background: #FFB000;">การสั่งซื้อของฉัน</a>
                </li>
                <li>
                  <a href="../home/editaddress.php" class="listboxpf pl-5 fs16">แก้ไขข้อมูลที่อยู่</a>
                </li>
                <li>
                  <a href="../home/mycard.php" class="listboxpf pl-5 fs16">ข้อมูลทางการเงิน</a>
                </li>
                <li>
                  <a href="../home/changepwd.php" class="listboxpf pl-5 fs16">เปลี่ยนรหัสผ่าน</a>
                </li>
                <li>
                  <a href="../home/mypoint.php" class="listboxpf pl-5 fs16">เหรียญสะสม</a>
                </li>

                <p class="listboxpfh fs20">การแจ้งเตือน</p>
                <p class="listboxpfh fs20">ส่วนลดของฉัน</p>
            </ul>
        </nav>
        <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light" style="background:transparent;">
<button type="button" id="sidebarCollapse" class="btn btn-info">
    <i class="fa fa-user-circle-o"></i>
    <span>ซ่อน | แสดง</span>
</button>
</nav>
            <!--ช่องว่าง เปิด-->
            <h5 class="headerreg text-center pb-5 pt-3">การสั่งซื้อของฉัน</h5>
            <div class="basketheader row text-center border-bottom pb-1 mx-5">
            <div class="col-2 text-left">
              <span>วัน / เวลา</span>
          </div>
        <div class="col-2 text-left">
              <span>ออเดอร์</span>
          </div>
          <div class="col-2 text-left">
              <span>สินค้า</span>
          </div>
          <div class="col-3 text-left">
            <span>ชื่อหนังสือ</span>
          </div>
          <div class="col-1 text-right">
            <span>จำนวน</span>
          </div>
          <div class="col-1 text-right">
            <span>รวมเป็นเงิน</span>
          </div>
          <div class="col-1 text-right">
            <span>สถานะ</span>
          </div>
            </div>
<?php
  $sql = "SELECT * FROM orders WHERE UserID = '$UserID' GROUP BY OrderNumber ORDER BY DAndT DESC";
  $result=mysqli_query($connect,$sql);
  $nbhistoryorder = mysqli_num_rows($result);
  if ($nbhistoryorder>0){
  while($row=mysqli_fetch_assoc($result)){
?>
            <div class="row py-4 border-bottom mx-5">
              <div class="col-2 text-left"><?php echo $row ["DateWhen"];?> / <?php echo $row ["TimeWhen"];?></div>
              <div class="col-2 text-left"><?php echo $row ["OrderNumber"];?></div>
              <?php 
                $idbook = $row["OrderNumber"];
                $sql2 = "SELECT * FROM orders WHERE OrderNumber = '$idbook' AND UserID = '$UserID' ORDER BY OrderAmount DESC";
                $result2=mysqli_query($connect,$sql2); 
                $sql3 = "SELECT * FROM orders WHERE OrderNumber = '$idbook' AND UserID = '$UserID' ORDER BY OrderAmount DESC";
                $result3=mysqli_query($connect,$sql3); 
                $sql4 = "SELECT * FROM orders WHERE OrderNumber = '$idbook' AND UserID = '$UserID' ORDER BY OrderAmount DESC";
                $result4=mysqli_query($connect,$sql4); 
              ?>
              <div class="col-2 text-left">
              <table>
              <?php
                while($row2=mysqli_fetch_assoc($result2)){
              ?>
              <tr>
                <td>
                  <a href="../product/product.php?BookISBN=<?php echo $row2 ["BookISBN"]; ?>">
                  <img height="72px" src="../img/img_bookall/fullimg/<?php echo $row2 ["BookISBN"]; ?>.jpg">
                  </a>
                </td>
              </tr>
              <?php } ?>
            </table>
              </div>
              <div class="col-3 text-left">
              <?php
                while($row4=mysqli_fetch_assoc($result4)){
                  $r4bn = $row4["BookISBN"];
                  $bnsql = "SELECT BookName FROM books WHERE BookISBN = '$r4bn'";
                  $result44 = mysqli_query($connect,$bnsql);
                  $row44 = mysqli_fetch_assoc($result44)
              ?>
              <div class="row">
              <div class="col-12" style="padding-bottom:48px"><?php echo $row44 ["BookName"]; ?></div>
              </div>
              <?php } ?>
              </div>
              <div class="col-1 text-right">
              <?php
                while($row3=mysqli_fetch_assoc($result3)){
              ?>
              <div class="row">
              <div class="col-12" style="padding-bottom:48px">x<?php echo $row3 ["OrderAmount"]; ?></div>
              </div>
              <?php } ?>
              </div>
              <div class="col-1 text-right">฿<?php echo $row ["OrderTotal"];?></div>
              <div class="col-1 text-right text-success">จัดส่งสำเร็จ</div>
            </div>
<?php
} //End While
} //END IF
else {
?>
<div class="alert alert-danger mx-5 mt-3 text-center" role="alert">ไม่พบประวัติการสั่งซื้อ</div>
<?php
} //END ELSE
?>
            </div>
            <!--ช่องว่าง ปิด-->
          </div>
            </div>
            <?php
require ('../style/footer.php');
?>
</body>
</html>
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
<script>
      $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
      });
</script>