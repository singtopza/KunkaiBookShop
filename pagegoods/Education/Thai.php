<?php session_start();  
require ('../../database/dbconnect.php');
require ('../../php/allbook.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../../js/allpage.js"></script>
</head>
<?php
if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
  require ('../../php/checkuser_in.php');
  require ('../../php/imgprofile.php');
  require ('../../php/badgeitem.php');
?>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php
  require ("../../style/header_in.php");
}
else { ?>
<body>
<?php
  require ("../../style/header_login_in.php");
}
?>
      <div class="container">
          <p class="homegoods mt-3">ภาษาไทย</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Thai/2019062500135.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/2019062500135.png" alt="แบบฝึกเสริมทักษะการอ่านจับใจความ ภาษาไทย ป.2 +เฉลย">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/2019062500135.php" style="text-decoration: none;"><font color="#000000"><strong>	  แบบฝึกเสริมทักษะการอ่านจับใจความ ภาษาไทย ป.2 +เฉลย</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>96.90  บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>102.00  บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Thai/8858716703829.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/8858716703829.png" alt="	
                เก่ง...ภาษาไทย ป.3 เล่ม 1  +เฉลย">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/8858716703829.php" style="text-decoration: none;"><font color="#000000"><strong>	เก่ง...ภาษาไทย ป.3 เล่ม 1  +เฉลย</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>113.05  บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>119.00  บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Thai/8859161007418.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/8859161002369.png" alt="	บัตรภาพคำศัพท์ ตัวอักษรภาษาไทย ก-ฮ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/8859161002369.php" style="text-decoration: none;"><font color="#000000"><strong>		 บัตรภาพคำศัพท์ ตัวอักษรภาษาไทย ก-ฮ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>180.00  บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del></del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Thai/8859161007418.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/8859161007418.png" alt="	เก่งไวไม่ยาก ภาษาไทย ป.4 มั่นใจเต็ม 100 +เฉลย">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/8859161007418.php" style="text-decoration: none;"><font color="#000000"><strong>	เก่งไวไม่ยาก ภาษาไทย ป.4 มั่นใจเต็ม 100 +เฉลย</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>209.00  บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>220.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
        </div> <!--end row-->
          <div class="row mt-4">
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Thai/9786160034017.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160034017.png" alt="	ไขปริศนาคำขวัญประจำจังหวัด  เล่ม 1 ภาคเหนือ-ภาคใต้">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/9786160034017.php" style="text-decoration: none;"><font color="#000000"><strong>	ไขปริศนาคำขวัญประจำจังหวัด  เล่ม 1 ภาคเหนือ-ภาคใต้</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>237.50 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>250.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Thai/9786160833603.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160833603.png" alt="	O-NET ภาษาไทย ม.6 เก็งข้อสอบเฉียบ เก็บเรียบทุกคะแนน">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/9786160833603.php" style="text-decoration: none;"><font color="#000000"><strong>	O-NET ภาษาไทย ม.6 เก็งข้อสอบเฉียบ เก็บเรียบทุกคะแนน</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>179.10  บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>199.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Thai/9786162018022.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162018022.png" alt="คลังข้อสอบจัดเต็ม ภาษาไทย ม.ปลาย">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/9786162018022.php" style="text-decoration: none;"><font color="#000000"><strong>คลังข้อสอบจัดเต็ม ภาษาไทย ม.ปลาย</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>361.00   บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>380.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Thai/9786163811929.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786163811929.png" alt="สรุปเข้ม ภาษาไทย มัธยมปลาย ฉบับสมบูรณ์">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Thai/9786163811929.php" style="text-decoration: none;"><font color="#000000"><strong>สรุปเข้ม ภาษาไทย มัธยมปลาย ฉบับสมบูรณ์</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>208.05   บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>219.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
          </div> <!--end row-->
          <br><br>
      </div>
      <?php
require ('../../style/footer_in.php');
?>
    <script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
  $('.clickadd').on('click', function () {
          var cart = $('.flytobasket');
          var imgtodrag = $('.card-img-top').eq(0);
          if (imgtodrag) {
              var imgclone = imgtodrag.clone()
                  .offset({
                  top: imgtodrag.offset().top,
                  left: imgtodrag.offset().left
              })
                  .css({
                  'opacity': '1',
                      'position': 'absolute',
                      'height': '250px',
                      'width': '250px',
                      'z-index': '100'
              })
                  .appendTo($('body'))
                  .animate({
                  'top': cart.offset().top + 10,
                      'left': cart.offset().left + 10,
                      'width': 75,
                      'height': 75
              }, 1000, 'easeInOutExpo');
              
              setTimeout(function () {
                  cart.effect("shake", {
                      times: 1
                  }, 200);
              }, 1500);
              imgclone.animate({
                  'width': 0,
                  'height': 0
              }, function () {
                  $(this).detach()
              });
          }
      });
    </script>
</body>
</html>