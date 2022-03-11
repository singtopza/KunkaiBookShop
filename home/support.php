<?php session_start();  
require ('../database/dbconnect.php');
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
  <style>
    .form-control.fixregtext {
    margin-top: 8px;
    margin-bottom: 25px;
    }
  </style>
</head>
<?php
if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');
?>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
<?php } else { ?>
<body>
<?php require ("../style/header_login.php"); ?>
<?php } ?>
            <div class="container">
            <h5 class="headerlog text-center pt-5 pb-2">ติดต่อเรา</h5>
              <div class="row mb-2">
                <div class="col-12 col-sm-2 text-center">
                  <img src="../img/chat.png" width="150" height="150">
                  </div>
                  <div class="col-12 col-sm-10 pl-5 pr-5 mb-4">
                    <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สวัสดีผู้ใช้ทุกท่าน ทางเรายินดีพร้อมให้การช่วยเหลือผู้ใช้ทุกท่าน หากพบปัญหาเกี่ยวการใช้งานของเว็บไซต์ ติดต่อโฆษณา อิอิ 
                      หรือมีความต้องการติดต่อปัญหาอื่นๆ ที่ต้องการติดต่อกับเจ้าหน้าที่ Kunkai เพื่อขอรับการช่วยเหลือโดยตรง สามารถติดต่อเราได้หลากหลายช่องได้ โดยติดต่อผ่านหมายเลขโทรศัพท์ 061-123-0387 
                      และร้านหนังสือสาขาใกล้บ้านคุณ หรือติดต่อผ่านทางแบบฟอร์มด้านล่างได้เลย</span>
                  </div>
                </div>
                <form class="gform" method="POST" data-email="from_email@example.com" action="https://script.google.com/macros/s/AKfycbx4FJsow23qPJQBs2dfsUFfpXaMKhzeeM1a3M5ia4Igairg5qO6dbS4TwfS4H8ANg0/exec">
                  <div class="form-elements">
                  <fieldset>
                    <div class="row">
                      <div class="col-12 text-left" style="margin-left:20%;">
                        <h5>กรอกแบบฟอร์มด้านล่าง</h5>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-6">
                      <table>
                        <tr>
                          <td class="checkfname"></td>
                          <td>
                          <input class="form-control fixregtext" type="text" id="FirstName" name="FirstName" placeholder="ชื่อ" required>
                          <div class="iffname_sup pl-1 text-left" style="display:none; margin:5px 0px 15px;"><font color="red">กรุณากรอกชื่อ</font></div>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-6">
                      <table>
                        <tr>
                          <td>
                          <input class="form-control fixregtext" type="text" id="LastName" name="LastName" placeholder="นามสกุล" required>
                          <div class="iflname_sup pl-1 text-left" style="display:none; margin:5px 0px 15px;"><font color="red">กรุณากรอกนามสกุล</font></div>
                        </td>
                        <td class="checkfname"></td>
                      </tr>
                    </table>
                    </div>
                  </div>
                  <center>
                    <input class="form-control fixregtext2" type="email" id="Email" name="Email" placeholder="อีเมล" required>
                    <div class="ifemail_sup pl-1 text-left" style="display:none; margin:5px 0px 15px 20%;"><font color="red">กรุณากรอกอีเมล</font></div>
                  <input class="form-control fixregtext2" type="text" id="Subject" name="Subject" placeholder="หัวข้อเรื่อง" required>
                  <div class="ifsubj_sup pl-1 text-left" style="display:none; margin:5px 0px 15px 20%;"><font color="red">กรุณากรอกหัวข้อเรื่อง</font></div>
                  <textarea class="form-control fixregtextarea" id="msg_sub" type="text" rows ="3" cols ="60" name="Message" placeholder="ปัญหาที่พบ" style="width:60%;" required></textarea>
                  <div class="ifmsg_sup pl-1 text-left" style="display:none; margin:5px 0px 15px 20%;"><font color="red">กรุณากรอกเนื้อหา</font></div>
                  <div class="form-group">
                  </div>
                </center>
                  <br/>
                  <div class="text-center"><input class="btnsupport mb-5" id="btnsubmit" type="submit" value="ส่งปัญหา" onclick="check_subform()" style="width:200px;"></div>
                </fieldset>
                </div>
                <div class="thankyou_message" id="mgbsupport" style="display:none;">
                  <div class="row">
                    <div class="col-3"></div>
                      <div class="col-9">
                        <h5><font color="green">เราได้รับอีเมลของคุณแล้ว โปรดรอการติดต่อกลับภายในระยะเวลา 24 ชั่วโมง</font></h5>
                      </div>
                    </div>
                </div>
                </form>
          </div>
<?php
require ('../style/footer.php');
?>
</body>
</html>
<script>
      $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
      });
</script>
<script>
$(document).ready(function(){
  $('#FirstName , #LastName , #Email , #Subject , #msg_sub').on('keyup', function () {
    var FirstName = document.getElementById('FirstName').value;
    var LastName = document.getElementById('LastName').value;
    var Email = document.getElementById('Email').value;
    var Subject = document.getElementById('Subject').value;
    var msg_sub = document.getElementById('msg_sub').value;
    var iffname_sup = document.querySelector(".iffname_sup");
    var iflname_sup = document.querySelector(".iflname_sup");
    var ifemail_sup = document.querySelector(".ifemail_sup");
    var ifsubj_sup = document.querySelector(".ifsubj_sup");
    var ifmsg_sup = document.querySelector(".ifmsg_sup");
    if (FirstName == "") {
    } else {
      $('#FirstName').removeClass('is-invalid')
      iffname_sup.style.display = "none";
      document.getElementById('FirstName').style.marginBottom = "25px";
    }
    if (LastName == "") {
    } else {
      $('#LastName').removeClass('is-invalid')
      iflname_sup.style.display = "none";
      document.getElementById('LastName').style.marginBottom = "25px";
    }
    if (Email == "") {
    } else {
      $('#Email').removeClass('is-invalid')
      ifemail_sup.style.display = "none";
      document.getElementById('Email').style.marginBottom = "25px";
    }
    if (Subject == "") {
    } else {
      $('#Subject').removeClass('is-invalid')
      ifsubj_sup.style.display = "none";
      document.getElementById('Subject').style.marginBottom = "25px";
    }
    if (msg_sub == "") {
    } else {
      $('#msg_sub').removeClass('is-invalid')
      ifmsg_sup.style.display = "none";
      document.getElementById('msg_sub').style.marginBottom = "25px";
    }
  });
});
function check_subform(){
  var FirstName = document.getElementById('FirstName').value;
    var LastName = document.getElementById('LastName').value;
    var Email = document.getElementById('Email').value;
    var Subject = document.getElementById('Subject').value;
    var msg_sub = document.getElementById('msg_sub').value;
    var iffname_sup = document.querySelector(".iffname_sup");
    var iflname_sup = document.querySelector(".iflname_sup");
    var ifemail_sup = document.querySelector(".ifemail_sup");
    var ifsubj_sup = document.querySelector(".ifsubj_sup");
    var ifmsg_sup = document.querySelector(".ifmsg_sup");
    if (FirstName == "") {
      $('#FirstName').addClass('is-invalid')
      $('#FirstName').removeClass('is-valid')
      iffname_sup.style.display = "block";
      document.getElementById('FirstName').style.marginBottom = "0px";
    } else {
      // $('#FirstName').addClass('is-valid')
      $('#FirstName').removeClass('is-invalid')
      iffname_sup.style.display = "none";
      document.getElementById('FirstName').style.marginBottom = "25px";
    }
    if (LastName == "") {
      $('#LastName').addClass('is-invalid')
      $('#LastName').removeClass('is-valid')
      iflname_sup.style.display = "block";
      document.getElementById('LastName').style.marginBottom = "0px";
    } else {
      // $('#LastName').addClass('is-valid')
      $('#LastName').removeClass('is-invalid')
      iflname_sup.style.display = "none";
      document.getElementById('LastName').style.marginBottom = "25px";
    }
    if (Email == "") {
      $('#Email').addClass('is-invalid')
      $('#Email').removeClass('is-valid')
      ifemail_sup.style.display = "block";
      document.getElementById('Email').style.marginBottom = "0px";
    } else {
      // $('#Email').addClass('is-valid')
      $('#Email').removeClass('is-invalid')
      ifemail_sup.style.display = "none";
      document.getElementById('Email').style.marginBottom = "25px";
    }
    if (Subject == "") {
      $('#Subject').addClass('is-invalid')
      $('#Subject').removeClass('is-valid')
      ifsubj_sup.style.display = "block";
      document.getElementById('Subject').style.marginBottom = "0px";
    } else {
      // $('#Subject').addClass('is-valid')
      $('#Subject').removeClass('is-invalid')
      ifsubj_sup.style.display = "none";
      document.getElementById('Subject').style.marginBottom = "25px";
    }
    if (msg_sub == "") {
      $('#msg_sub').addClass('is-invalid')
      $('#msg_sub').removeClass('is-valid')
      ifmsg_sup.style.display = "block";
      document.getElementById('msg_sub').style.marginBottom = "0px";
    } else {
      // $('#msg_sub').addClass('is-valid')
      $('#msg_sub').removeClass('is-invalid')
      ifmsg_sup.style.display = "none";
      document.getElementById('msg_sub').style.marginBottom = "25px";
    }
}
</script>
<script data-cfasync="false" type="text/javascript" src="../js/form-submission-handler.js"></script>