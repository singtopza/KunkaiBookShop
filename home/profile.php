<?php session_start();
require('../database/dbconnect.php');
require('../php/checkuser.php');
require('../php/imgprofile.php');
require('../php/badgeitem.php');
$datauser = "SELECT * FROM users WHERE UserID = $UserID";
$rdatauser = mysqli_query($connect, $datauser);
$rowdatauser = mysqli_fetch_assoc($rdatauser);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon" type="image/png" href="../img/Logo.png">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/allpage.js"></script>
  <style>
    a.disabled {
      pointer-events: none;
      cursor: default;
    }
  </style>
</head>

<body onload="start()">
  <script>
    function start() {
      timeout();
    }
  </script>
  <!-- <span id="timem" class="text-danger"></span>:<span id="times" class="text-danger"></span> -->
  <?php require("../style/header.php"); ?>
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
          <a href="../home/profile.php" class="listboxpf pl-5 fs16" style="background: #FFB000;">ข้อมูลโปรไฟล์</a>
        </li>
        <li>
          <a href="../home/myorder.php" class="listboxpf pl-5 fs16">การสั่งซื้อของฉัน</a>
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
      <h5 class="headerreg text-center pb-5 pt-3">ข้อมูลส่วนตัว</h5>
      <div class="row" style="margin-left:0px; margin-right:0px;">
        <div class="col-lg-6 border-right" style="padding-right:0px;">
          <?php
          if ($countrowimgprofile > 0) { ?>
            <div class="text-center"><img id="userprofile" src="../img/userprofile/<?php echo $row["NameFile"]; ?>"></div>
          <?php } else { ?>
            <div class="text-center"><img id="userprofile" src="../img/imgerror/errorimg.png"></div>
          <?php } ?>
          <form class="text-center mb-5" name="formaddimgprofile" method="POST" action="../database/kkuploadprofile.php" enctype="multipart/form-data">
            <label for="profile_choosefile_kk" class="btn btn-primary mt-4" id="choose-file-label"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;เลือกภาพ</label>
            <input class="choosefilepf my-3" type="file" name="NameFile" id="profile_choosefile_kk" accept="image/x-png,image/gif,image/jpeg,image/jpg" style="display: none;" />
            <br><input class="text-white btn btn-success px-3 mt-3" type="submit" value="อัพโหลด">
            <a href="../database/kkdeleteprofile.php?UserID=<?php echo $UserID; ?>"><input class="text-white btn btn-danger px-3 mt-3" type="button" value="ลบออก"></a>
          </form>
          <div class="text-center">
            <span>ขนาดไฟล์ไม่เกิน 25MB</span><br>
            <span>รองรับไฟล์ JPEG, JPG, PNG, GIF</span>
          </div>
        </div>
        <div class="col-lg-6 fs18 pt-3" style="padding-left:100px; padding-right:100px;">
          <div class="row mt-4">
            <div class="col-12 col-sm-3 pr-0">
              <p class="font-weight-bold">ชื่อผู้ใช้ :</p>
            </div>
            <div class="col-9">
              <p class="del_p_mg"><?php echo $rowdatauser["FirstName"] . " " . $rowdatauser["LastName"]; ?></p>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-3 pr-0">
              <p class="font-weight-bold">อีเมล :</p>
            </div>
            <div class="col-9">
              <p class="del_p_mg"><?php echo $rowdatauser["Email"]; ?></p>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-3 pr-0">
              <p class="font-weight-bold">รหัสผ่าน :</p>
            </div>
            <div class="col-9">
              <p class="del_p_mg"><?php echo "*********"; ?></p>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-3 pr-0">
              <p class="font-weight-bold">เพศ :</p>
            </div>
            <div class="col-9">
              <p class="del_p_mg"><?php echo $rowdatauser["Sex"] ?></p>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-3 pr-0">
              <p class="font-weight-bold">เบอร์ติดต่อ :</p>
            </div>
            <div class="col-9">
              <p class="del_p_mg"><?php echo $rowdatauser["Phone"] ?></p>
            </div>
          </div>
          <div class="row mb-4 mt-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-3 text-left" style="padding-left:10px; padding-right:10px;">
              <a class="btn btn-info mt-2" style="width:100%; font-size:14px;" href="#">แก้ไขข้อมูลส่วนตัว</a>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-3 text-left" style="padding-left:10px; padding-right:10px;">
              <a class="btn btn-info mt-2" style="width:100%; font-size:14px;" href="../home/changepwd.php">เปลี่ยนรหัสผ่าน</a>
            </div>
          </div>
        </div>
      </div>
      <!--ช่องว่าง ปิด-->
    </div>
  </div>
  <?php
  require('../style/footer.php');
  ?>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar').toggleClass('active');
    });
  });
</script>
<script>
  $(window).on('beforeunload', function() {
    $(window).scrollTop(0);
  });
</script>
<script>
  $(document).ready(function() {
    $('#profile_choosefile_kk').change(function() {
      var i = $(this).prev('label').clone();
      var file = $('#profile_choosefile_kk')[0].files[0].name;
      $(this).prev('label').text(file);
    });
  });
</script>