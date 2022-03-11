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
  <script src="../js/checkform.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/allpage.js"></script>
  <style>
    .progress-bar{
      background-color: #ffa600;
    }
  </style>
</head>
<body>
<?php require ("../style/header_login.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
            <div>
              <h5 class="headerreg text-center py-5">กู้คืนรหัสผ่าน</h5>
              <!-- <div class="progress" style="margin:0px 225px 0px 225px; height:50px"> -->
                <div class="progress" style="margin:0px 20% 0px 20%; height:50px">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <br/>
              <br/>
              <center>
                <form id="regsetpwdform" action="../database/resetpwd.php" method="POST" class="needs-validation" novalidate>
                <fieldset>
                  <input class="form-control fixregtext2" type="email" id="email" name="Email" placeholder="ระบุอีเมลที่ลงทะเบียน" required>
                  <input type="button" name="next" class="next" value="ดำเนินการต่อ" style="width:200px;">
                </fieldset>
                <fieldset>
                  <input class="form-control fixregtext2 deleteupdown" type="text" id="otp" name="otp" pattern="^[0-9]{6,6}$" title="ช่องระบุรหัส OTP 6 หลัก" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="Phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="6" placeholder="ระบุ OTP 6 หลัก" required>
                  <table>
                    <tr>
                      <td class="checkreg text-left"></td>
                      <td>
                      <p>หากคุณยังไม่ได้รับรหัส OTP โปรด <button type="button" class="con-resetpwd mb-2">คลิ๊กที่นี่</button> เพื่อขอรหัสอีกครั้ง</p>
                      </td>
                    </tr>
                  </table>
                  <input type="button" name="previous" class="previous" value="ย้อนกลับ" style="width:200px;">
                  <input type="button" name="next" class="next" value="ดำเนินการต่อ" style="width:200px;">
                </fieldset>
                <fieldset>
                  <table>
                    <tr>
                      <td class="checkreg text-left"></td>
                      <td>
                      <p>ระบุรหัสผ่านที่ต้องการเปลี่ยน</p>
                      </td>
                    </tr>
                  </table>
                  <input class="form-control fixregtext2 pwds" type="password" id="pwd" name="Password" placeholder="รหัสผ่าน" pattern="[0-9,A-Za-z]{5,30}" maxlength="30" style="margin-bottom: 0px;" required>
                  <div id="cPwdPassword" class="pdlogin invalid-feedback text-left mb-4"></div>
                  <input class="form-control fixregtext2 pwdc" type="password" id="cpwd" name="CPassword" placeholder="ยืนยันรหัสผ่าน" pattern="[0-9,A-Za-z]{5,30}" maxlength="30" style="margin-bottom: 0px; margin-top: 25px;" required>
                  <div id="cPwdInvalid" class="pdlogin invalid-feedback text-left mb-4"></div>
                  <div id="cPwdValid" class="pdlogin invalid-feedback text-left mb-4"></div>
                  <input type="button" name="previous" class="previous mt-4" value="ย้อนกลับ" style="width:200px;">
                  <input type="button" name="conresetpwd" class="conresetpwd" value="ยืนยัน" data-toggle="modal" data-target="#conresetpwd" style="width:200px;">
                                              <!-- Modal -->
<div class="modal fade" id="conresetpwd" tabindex="-1" role="dialog" aria-labelledby="conresetpwdlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="conresetpwdlabel">ขั้นตอนสุดท้าย</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        คุณยืนยันที่จะเปลี่ยนรหัสผ่านใช่หรือไม่ ?<br>
        <br><br>
        <font color="red">**หากคุณไม่สามารถกด "ยืนยัน" ได้<br>โปรดย้อนกลับเพื่อตรวจสอบข้อมูลก่อนหน้านี้</font>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">ยกเลิก</button>
        <input type="submit" class="btn-conresetpwd btn-success" id="btnresetpwd" value="ยืนยัน" disabled style="opacity:0.5;">
      </div>
    </div>
  </div>
</div>
<!--ENG MODAL-->
                </fieldset>
            </form>
          </center>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>  
  $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    var pc;
    if(percent >= 33){
        pc = "ขั้นตอนที่ 1";
      } 
    if(percent == 67){
        pc = "ขั้นตอนที่ 2";
      }
    if(percent == 100){
        pc = "ขั้นตอนสุดท้าย";
      } 
    $(".progress-bar")
    .css("width",percent+"%")
    .css("font-size",15+"px")
    .html(pc);  
  }
  });
  </script>
<script>
  $(document).ready(function(){
    $('#pwd, #cpwd').on('keyup', function () {
        var string_value = document.getElementById('pwd').value;
        var string_value_2 = document.getElementById('cpwd').value;
        if (string_value.length < 5 || string_value.length > 30 || !/^[a-zA-Z]/.test(string_value)) {
            if (string_value.length == '' && string_value_2.length == '') {
            $('.pwds').removeClass('is-invalid')
            $('.pwds').removeClass('is-valid')
            $('.pwdc').removeClass('is-invalid')
            $('.pwdc').removeClass('is-valid')
            $('#cPwdPassword').hide();
            $('#cPwdInvalid').hide();
            } 
            else if (string_value.length == '' && string_value_2.length != '') {
            $('.pwds').removeClass('is-valid')
            $('.pwds').addClass('is-invalid')
            $('.pwdc').removeClass('is-valid')
            $('.pwdc').addClass('is-invalid')
            $('#cPwdPassword').show();
            $('#cPwdPassword').html('รหัสผ่านต้องมี A-Z a-z 0-9 และมีความยาว 5-30 ตัวอักษร').css('color', 'red');
            $('#cPwdInvalid').show();
            $('#cPwdInvalid').html('รหัสผ่านไม่ตรงกัน').css('color', 'red');
            }
            else {
          document.getElementById("btnresetpwd").style.opacity = "0.5";
          $("#btnresetpwd").attr("disabled",true);
          $('.pwds').removeClass('is-valid')
          $('.pwdc').removeClass('is-valid')
          $('.pwds').addClass('is-invalid')
          $('#cPwdValid').hide();
          $('#cPwdInvalid').hide();
          $('#cPwdPassword').show();
          $('#cPwdPassword').html('รหัสผ่านต้องมี A-Z a-z 0-9 และมีความยาว 5-30 ตัวอักษร').css('color', 'red');
            }
        }
        else {
          $('#cPwdPassword').hide();
          $('.pwds').removeClass('is-invalid')
          $('.pwds').addClass('is-valid')
          if ($('#pwd').val() == '' || $('#cpwd').val() == '') {
            $('.pwds').removeClass('is-invalid')
            $('.pwds').removeClass('is-valid')
            $('.pwdc').removeClass('is-invalid')
            $('.pwdc').removeClass('is-valid')
            $('#cPwdPassword').hide();
            $('#cPwdInvalid').hide();
          }
          else if ($('#pwd').val() != '' && $('#cpwd').val() != '' && $('#pwd').val() == $('#cpwd').val()) {
          document.getElementById("btnresetpwd").style.opacity = "1";
          $("#btnresetpwd").attr("disabled",false);
          $('#cPwdValid').show();
          $('#cPwdInvalid').hide();
          $('.pwds').removeClass('is-invalid')
          $('.pwdc').removeClass('is-invalid')
          $('.pwds').addClass('is-valid')
          $('.pwdc').addClass('is-valid')
          }
        else {
          document.getElementById("btnresetpwd").style.opacity = "0.5";
          $("#btnresetpwd").attr("disabled",true);
          $('#cPwdValid').hide();
          $('#cPwdInvalid').show();
          $('#cPwdInvalid').html('รหัสผ่านไม่ตรงกัน').css('color', 'red');
          $('.pwdc').removeClass('is-valid')
          $('.pwdc').addClass('is-invalid')
        }
        }
      });
      });
</script>
</body>
</html>