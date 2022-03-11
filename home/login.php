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
  <script src="../js/allpage.js"></script>
</head>
<body>
<?php require ("../style/header_login.php"); ?>
            <div class="container mb-5">
            <!--ช่องว่าง เปิด-->
              <h5 class="headerlog text-center py-5">เข้าสู่ระบบ</h5>
              <form id="loginformid" action="../home/kklogin_cookie.php" method="POST" class="needs-validation" novalidate>
              <center>
              <input class="form-control pylogin" type="email" id="email" name="Email" placeholder="อีเมล" maxlength="35" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
              <label class="pdlogin text-left invalid-feedback">* รูปแบบของอีเมลไม่ถูกต้อง</label>
              <input class="form-control pylogin2" type="password" id="pwd" name="Password" placeholder="รหัสผ่าน" pattern="[0-9,A-Za-z]{5,30}" maxlength="30" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
              <label class="pdlogin text-left invalid-feedback mb-2" id="logoffline">* คุณยังไม่ได้ระบุรหัสผ่าน</label>
              <label class="pdlogin text-left invalid-feedback mb-2" id="logoffline_1"></label>
              </center>
              <div class="row">
                <div class="col-12 col-sm-6" style="padding-left:21%;">
                      <input type="checkbox" id="rememberaccount" name="acceptlog" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>/>
                      <label for="rememberaccount"> &nbsp; ให้ฉันอยู่ในระบบต่อไป</label>
                </div>
                <div class="col-12 col-sm-6 text-right pt-3" style="padding-right:21%;">
                    <a href="../home/resetpwd.php" style="text-decoration: none;"><font color="#0963FF">ลืมรหัสผ่าน</font></a>
                    </div>
                </div>
              <br/>
              <center>
              <button class="btn mb-5" type="submit" id="submitlogin" name="loginpage" value="loginpage" style="width:200px;">เข้าสู่ระบบ</button>
              </center>
            </form>
              <br/><br/>
              <table>
                <tr>
                  <td class="checkreg"></td>
                  <td>
                  <p>ยังไม่มีบัญชีผู้ใช้ใช่หรือไม่<a href="../home/register.php" style="text-decoration: none;"><font color="#0963FF"> สมัครได้ที่นี่</font></a></p><br><br>
                  <!-- <p class="alert-info text-center" style="margin-right:25%; border-radius: 360px;">รหัสผ่านการเข้าใช้งาน<font color="#0963FF"> F12 </font> > <font color="#0963FF">Console</font></p> -->
                  </td>
                </tr>
              </table>
              <br/>
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
  $(document).ready(function(){
      $('#pwd').on('keyup', function () {
    var string_value = document.getElementById('pwd').value;
      if($('#pwd').val() == ''){
        $('#logoffline').show();
        $('#logoffline_1').hide();
        $('#pwd').addClass('is-invalid')
        $('#pwd').removeClass('is-valid')
      }
      else if (string_value.length < 5 || string_value.length > 30 || !/^[a-zA-Z]/.test(string_value)) {
        $('#pwd').addClass('is-invalid')
        $('#pwd').removeClass('is-valid')
        $('#logoffline').hide();
        $('#logoffline_1').show();
        $('#logoffline_1').html('รหัสผ่านต้องมี A-Z a-z 0-9 และมีความยาว 5-30 ตัวอักษร').css('color', 'red');
      }
      else {
        $('#pwd').removeClass('is-invalid')
        $('#pwd').addClass('is-valid')
        $('#logoffline').hide();
        $('#logoffline_1').hide();
      }
});
  });
    </script>
</body>
</html>