<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkofficer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/console.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require("../style/officer_style.php"); ?>
          <div class="text-center my-5 py-5">
          <img src="../img/Logo.gif" class="text-center mt-4 mb-4" width="250px">
          <h3 class="my-5 pt-5 pb-2">ยินดีต้อนรับสู่ระบบการจัดการร้าน</h3>
          <?php
          if ($UStatus == 'Admin'){ ?>
            <h4 class=""><?php echo "ผู้จัดการ : ".$FirstName." ".$LastName?></h4><br><br>
          <?php }
          if ($UStatus == 'Officer'){ ?>
            <h4 class=""><?php echo "พนักงาน : ".$FirstName." ".$LastName?></h4><br><br>
          <?php } ?>
          <span>เวลาปัจจุบัน </span><span id="time_now_set" class="text-danger"></span><span> นาฬิกา</span><br><br>
          <span>ระยะเวลาการเข้าใช้งาน </span>
          <span id="timehr" class="text-danger"></span><span> ชั่วโมง</span>
          <span id="timem" class="text-danger"></span><span> นาที</span>
          <span id="times" class="text-danger"></span><span> วินาที</span><br/><br/>
          <span style="margin-top: 30px">จำนวนครั้งที่เข้าใช้งาน : </span><img src="http://guestscounter.com/count.php?c_style=3&id=1617984418">
          <p style="margin-top: 160px">Copyright © by kunkaibookshop.lnw.mn 2020</p>
          </div>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
</body>
</html>
<!-- <script>
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
</script> -->