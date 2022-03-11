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
<?php
require ("../style/header.php");
} else {
?>
<body>
<?php
  require ("../style/header_login.php");
}
?>
            <!--ช่องว่าง เปิด-->
            <div class="container-fluid tomato">
              <p class="agreement-header">นโยบายและข้อตกลง</p>
            </div>
            <div class="container">
            <p class="fs18 my-5">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การใช้เว็บไซต์ของผู้ใช้บริการจะอยู่ภายใต้เงื่อนไขและข้อตกลงนี้ ดังนั้นผู้ใช้บริการจึงควรศึกษาเงื่อนไขและข้อตกลงฉบับนี้ ได้แจ้งให้ทราบบนเว็บไซต์โดยละเอียดก่อนการเข้าใช้เว็บไซต์ ทั้งนี้การเข้าใช้เว็บไซต์นี้ให้ถือว่าผู้ใช้บริการยอมรับ และตกลงที่จะปฏิบัติตามเงื่อนไขและข้อตกลงดังกล่าว
            </p>
          </div>
          <div class="agreement-body fs17 container mb-5 pr-5">
            <p class="pt-3 text-warning">
              <strong>เงื่อนไขการใช้บริการ</strong>
            </p>
            <div class="row pb-3">
              <div class="col-1 text-right">
                1.
              </div>
              <div class="col-11">
                การใช้บริการของผู้ให้บริการนั้นผู้ใช้บริการจำเป็นต้องเข้าใจและยอมรับข้อตกลงและเงื่อนไขต่างๆของผู้ให้บริการทั้งหมด
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                2.
              </div>
              <div class="col-11">
                ผู้ใช้บริการเข้าใช้บริการของผู้ให้บริการ ซึ่งในกรณีนี้ผู้ใช้บริการต้องยอมรับว่าทางผู้ให้บริการจะถือว่าผู้ใช้บริการเข้าใจและยอมรับข้อตกลงและเงื่อนไขต่างๆ ตั้งแต่เริ่มใช้บริการเป็นต้นไป
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                3.
              </div>
              <div class="col-11">
                ท่านต้องลงทะเบียนสมัครโดยให้ข้อมูลที่ถูกต้องครบถ้วนสมบูรณ์และเป็นความจริงในปัจจุบัน หากข้อมูลที่ให้ไว้ ไม่เป็นความจริง ทาง kunkaibookshop.lnw.mn มีสิทธิ์ในการระงับการให้บริการกับท่านทันที
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                4.
              </div>
              <div class="col-11">
                ผู้ใช้บริการรับทราบเป็นอย่างดีแล้วว่า kunkaibookshop.lnw.mn เป็นผู้ให้บริการด้านการ ขายหนังสือ เพื่อส่งมอบหนังสือให้กับผู้ที่สนใจ และมิได้มีส่วนเกี่ยวข้องใดๆ กับการเขียนข้อความ หรือแปลข้อความ แต่อย่างใด
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                5.
              </div>
              <div class="col-11">
                ผู้ใช้บริการยินยอมที่จะมอบข้อมูลส่วนตัวให้แก่ผู้ให้บริการของ kunkaibookshop.lnw.mn เพื่อนำไปเป็นมูลของลูกค้า
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                6.
              </div>
              <div class="col-11">
                ผู้ใช้บริการยินยอมที่จะมอบที่อยู่ รวมถึงบัตรเดรดิต เดบิต และข้อมูลทางการเงินของผู้ใช้บริการ ให้แก่ผู้ให้บริการของ kunkaibookshop.lnw.mn เพื่อนำไปเป็นข้อมูลทางการเงิน ในการชำระสินค้า
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                7.
              </div>
              <div class="col-11">
                หากผู้ใช้บริการไม่ปฏิบัติตามข้อกำหนดและเงื่อนไขตามคำขอใช้บริการฉบับนี้ข้อใดข้อหนึ่งผู้ให้บริการขอสงวนสิทธิในการเพิกถอนสมาชิกภาพ และสามารถยกเลิกการให้บริการกับท่านได้ทันที โดยไม่ต้องแจ้งล่วงหน้า การพิจารณาการเพิกถอนสมาชิกภาพ  ขึ้นอยู่กับดุลยพินิจของเจ้าหน้าที่เว็บไซต์
              </div>
            </div> <!--End row text-->
            <div class="row pb-3">
              <div class="col-1 text-right">
                8.
              </div>
              <div class="col-11 pb-3">
                ผู้ให้บริการขอสงวนสิทธิ์ที่จะเปลี่ยนแปลงแก้ไขข้อตกลงและเงื่อนไขดังกล่าวข้างต้นตามแต่จะเห็นสมควรโดยมิต้องแจ้งให้ทราบล่วงหน้า
              </div>
            </div> <!--End row text-->
          </div>
            <!--ช่องว่าง ปิด-->
            <?php
require ('../style/footer.php');
?>
    <script>
      $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
      });
          </script>
</body>
</html>