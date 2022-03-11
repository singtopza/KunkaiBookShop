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
          <p class="homegoods mt-3">คณิตศาสตร์</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Mathematics/2019092700161.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/2019092700161.png" alt="แบบประเมินผลตามตัวชี้วัดรายวิชาพื้นฐาน คณิตศาสตร์ ม.1 เล่ม 2 +เฉลย">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/2019092700161.php" style="text-decoration: none;"><font color="#000000"><strong>แบบประเมินตัวชี้วัดรายวิชาพื้นฐาน คณิตศาสตร์ ม.1</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>99.75 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>105.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Mathematics/8858736512685.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/8858736512685.png" alt="เตรียมความพร้อมแบบฝึกทักษะพื้นฐาน คณิตศาสตร์ เล่ม 3 สำหรับเด็กอนุบาล-เด็กเริ่มเรียน">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/8858736512685.php" style="text-decoration: none;"><font color="#000000"><strong>แบบฝึกทักษะคณิตศาสตร์ เล่ม 3 สำหรับเด็กเริ่มเรียน</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>38.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>40.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Mathematics/9786160837779.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160837779.png" alt="ฝึกโจทย์เข้มเติมเต็ม เล่ม 1 คณิตศาสตร์ ป. 4-5-6 ชุดพัฒนาทักษะการแก้โจทย์ปัญหา">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786160837779.php" style="text-decoration: none;"><font color="#000000"><strong>ฝึกโจทย์เข้มเติมเต็ม เล่ม 1 คณิตศาสตร์ ป. 4-5-6</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>243.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>270.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/Mathematics/9786162018084.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162018084.png" alt="คณิตคิดกล้วย ๆ คณิตศาสตร์ ป.2 เล่ม 2">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786162018084.php" style="text-decoration: none;"><font color="#000000"><strong>คณิตคิดกล้วย ๆ คณิตศาสตร์ ป.2 เล่ม 2</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>123.50 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>130.00 บาท</del></td>
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
                <a href="../../pagegoods/Education/Mathematics/9786162375576.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162375576.png" alt="คู่มือเตรียมสอบ คณิตศาสตร์ ม.1-2-3 (ฉบับปรับปรุงใหม่ 2562)">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786162375576.php" style="text-decoration: none;"><font color="#000000"><strong>คู่มือเตรียมสอบ คณิตศาสตร์ ม.1-2-3 (ฉบับปรับปรุงใหม่ 2562)</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>211.50 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>235.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Mathematics/9786162375668.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162375668.png" alt="เจาะลึกข้อสอบ คณิตศาสตร์ ป.6 สอบเข้า ม.1">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786162375668.php" style="text-decoration: none;"><font color="#000000"><strong>เจาะลึกข้อสอบ คณิตศาสตร์ ป.6 สอบเข้า ม.1</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>189.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>210.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/Mathematics/9786162581458.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162581458.png" alt="แผ่นรวมสูตรคณิตศาสตร์ ม.ต้น รายวิชาพื้นฐานและเพิ่มเติม">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786162581458.php" style="text-decoration: none;"><font color="#000000"><strong>แผ่นรวมสูตรคณิตศาสตร์ ม.ต้น รายวิชาพื้นฐานและเพิ่มเติม</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>35.00 บาท</strong></td>
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
                <a href="../../pagegoods/Education/Mathematics/9786164492394.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164492394.png" alt="ติวสอบ คณิตศาสตร์ ม.1 (พร้อมทุกสนามสอบ)">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Mathematics/9786164492394.php" style="text-decoration: none;"><font color="#000000"><strong>ติวสอบ คณิตศาสตร์ ม.1 (พร้อมทุกสนามสอบ)</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>316.00 บาท</strong></td>
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