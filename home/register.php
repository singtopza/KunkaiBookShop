<?php session_start(); 
if (isset($_SESSION["UserID"])) {
  echo "<script type='text/javascript'>alert('คุณได้เข้าสู่ระบบแล้ว !');</script>";
  echo ("<script>window.location = '../index.php';</script>");
}
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
  <script src="../js/checkform.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/allpage.js"></script>
</head>
<body>
<?php require ("../style/header_login.php"); ?>
            <div class="container mb-5">
            <!--ช่องว่าง เปิด-->
            <h5 class="headerreg text-center py-5">สมัครสมาชิก</h5>
            <form name="formreg" id="registerform" action="../database/kkregisterdata.php" method="POST" class="needs-validation">
            <div class="row">
              <div class="col-6">
                <table>
                  <tr>
                    <td class="checkfname"></td>
                    <td>
                    <input class="form-control fixregtext" type="text" id="fname" name="FirstName" placeholder="ชื่อ" maxlength="30" required>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-6">
                <table>
                  <tr>
                    <td>
                    <input class="form-control fixregtext" type="text" id="lname" name="LastName" placeholder="นามสกุล" maxlength="30" required>
                  </td>
                  <td class="checkfname"></td>
                </tr>
              </table>
              </div>
            </div>
            <center>
            <input class="form-control fixregtext2" type="email" id="email" name="Email" placeholder="อีเมล" maxlength="35" required>
            <!--<input class="form-control fixregtext2 pwds" type="password" id="pwd" name="Password" pattern="^[0-9,a-z]{10,30}$" placeholder="รหัสผ่าน" required>-->
            <input class="form-control fixregtext2 pwds" type="password" id="pwd" name="Password" placeholder="รหัสผ่าน" pattern="[0-9,A-Za-z]{5,30}" maxlength="30" style="margin-bottom: 0px;" required>
            <div id="cPwdPassword" class="pdlogin invalid-feedback text-left mb-4"></div>
            <input class="form-control fixregtext2 pwdc" type="password" id="cpwd" name="CPassword" placeholder="ยืนยันรหัสผ่าน" pattern="[0-9,A-Za-z]{5,30}" maxlength="30" style="margin-bottom: 0px; margin-top: 25px;" required>
            <div id="cPwdInvalid" class="pdlogin invalid-feedback text-left mb-4"></div>
            <div id="cPwdValid" class="pdlogin invalid-feedback text-left mb-4"></div>
            <!-- <textarea class="form-control fixregtextarea" type="text" rows = "3" cols = "60" name = "Address" placeholder="ที่อยู่สำหรับการจัดส่ง" required></textarea> -->
            <div class="form-group">
            <select class="form-control fixregsex" type="text" id="gender" name="Sex" style="margin-top: 25px;">
            <option value="ไม่ทราบ">เลือกเพศของคุณ (ยังไม่ระบุ)</option>
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
            </select>
            </div>
            <input class="form-control reg_phone deleteupdown" type="number" id="reg_phone" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="Phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" placeholder="หมายเลขโทรศัพท์" required>
          </center>
            <table>
              <tr>
                <td class="checkreg"></td>
                <td class="pl-4">
                <input class="form-check-input" type="checkbox" id="acceptreg" name="acceptreg" value="Accept" required>
                <label class="mbacceptreg" for="acceptreg"> ฉันยอมรับ<a href="../home/agreement.php" style="text-decoration: none;" target="_blank"><font color="#0963FF">นโยบายและข้อตกลง</font></a>ของเว็บไซต์ทั้งหมด</label>
                <label class="invalid-feedback">* จำเป็นต้องยอมรับนโยบายและข้อตกลง ก่อนทำการสมัครสมาชิก</label>
              </td>
              </tr>
            </table>
            <br/>
            <center>
            <button class="btn mb-5 mt-2" type="button" id="btnnewreg" data-toggle="modal" data-target="#submitreg">สมัครสมาชิก</button>
            <div id="submitreg" class="modal fade">
              <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                  <div class="modal-header flex-column">	
                    <img src="../img/Logo.gif" width="30%" height="30%" style="display: block; margin-left: auto; margin-right: auto;">			
                    <h4 class="modal-title w-100">ยืนยันการสมัครสมาชิก</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>คุณได้ตรวจสอบข้อมูล และยืนยันที่จะสมัครสมาชิก หรือไม่ ?</p>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary fixhover" onclick="return fncSubmit();">ยืนยัน</button>
                    <button type="button" class="btn btn-primary fixhover" data-dismiss="modal">ยกเลิก</button>
                  </div>
                </div>
              </div>
            </div>   
            </center>
          </form>
            <br/>
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
<script>
  function fncSubmit(){
    if(document.formreg.Password.value != '') {
    if(document.formreg.Password.value != document.formreg.CPassword.value){
      alert('รหัสผ่านไม่ตรงกัน !');
      // document.formreg.CPassword.focus();
      // return false;
    } else {
    var checkBox_accept = document.getElementById("acceptreg");
      if (checkBox_accept.checked != true){
        alert('กรุณายอมรับเงื่อนไขของเรา ก่อนทำการสมัครสมาชิก !');
      }
    }
    // document.form1.submit();
  } else {
    // alert('คุณยังไม่ได้ระบุรหัสผ่าน');
  }
}
</script>
<script>
  $(document).ready(function(){
      $('#pwd, #cpwd').on('keyup', function () {
        var string_value = document.getElementById('pwd').value;
        if (string_value.length < 5 || string_value.length > 30 || !/^[a-zA-Z]/.test(string_value)) {
          // $('.pwds').addClass('is-valid')
          $('#cPwdValid').hide();
          $('#cPwdInvalid').hide();
          $('#cPwdPassword').show();
          $('#cPwdPassword').html('รหัสผ่านต้องมี A-Z a-z 0-9 และมีความยาว 5-30 ตัวอักษร').css('color', 'red');
        }
        else {
          $('#cPwdPassword').hide();
          $('#pwd').removeClass('is-invalid')
          // $('#pwd').addClass('is-valid')

          if ($('#pwd').val() != '' && $('#cpwd').val() != '' && $('#pwd').val() == $('#cpwd').val()) {
          $('#cPwdValid').show();
          $('#cPwdInvalid').hide();
          // $('#cPwdValid').html('รหัสผ่านตรงกัน').css('color', 'green');
          $('.pwds').removeClass('is-invalid')
          $('.pwdc').removeClass('is-invalid')
        } 
        else {
          if($('#cpwd').val() == ''){
            $('#cPwdInvalid').hide();
            $('.pwdc').removeClass('is-invalid')
          }
          else {
          $('#cPwdValid').hide();
          $('#cPwdInvalid').show();
          $('#cPwdInvalid').html('รหัสผ่านไม่ตรงกัน').css('color', 'red');
          // $('#cpwd').removeClass('is-valid')
          $('#cpwd').addClass('is-invalid')
          }
        }
        }
      });
      let currForm1 = document.getElementById('registerform');
        // Validate on submit:
        currForm1.addEventListener('submit', function(event) {
          if (currForm1.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          currForm1.classList.add('was-validated');
        }, false);
        // Validate on input:
        currForm1.querySelectorAll('.form-control').forEach(input => {
          input.addEventListener(('input'), () => {
            if (input.checkValidity()) {
              input.classList.remove('is-invalid')
              // input.classList.add('is-valid');
            } else {
              input.classList.remove('is-valid')
              input.classList.add('is-invalid');
            }
            var is_valid = $('.form-control').length === $('.form-control.is-valid').length;
          });
        });
      });
</script>
</body>
</html>