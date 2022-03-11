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
          <p class="homegoods mt-3">วิทยาการและเทคโนโลยี</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160800360.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160800360.png" alt="สุดยอดพระคำภีร์ด้านอิเล็กทเรอนิกส์">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160800360.php" style="text-decoration: none;"><font color="#000000"><strong>สุดยอดพระคำภีร์ด้านอิเล็กทเรอนิกส์</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>85.50 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>250.50 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              
                <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160801060.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160801060.png" alt="หนังสือเล่มเดียวที่จะนำท่านไปสู่ความเข้าใจเทคโนโลยีเครือข่ายของ Cisco">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160801060.php" style="text-decoration: none;"><font color="#000000"><strong>หนังสือเล่มเดียวที่จะนำท่านไปสู่ความเข้าใจเทคโนโลยีเครือข่ายของ Cisco</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>260.50 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>290.50 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
          
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160801985l.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160801985l.png" alt="เหมาะสำหรับผู้ศึกษาอยู่ในหลักสูตรระดับ ปวช. ปวส. ปริญญาตรี สาขาไฟฟ้า">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160801985l.php" style="text-decoration: none;"><font color="#000000"><strong>เหมาะสำหรับผู้ศึกษาอยู่ในหลักสูตรระดับ ปวช. ปวส. ปริญญาตรี สาขาไฟฟ้า</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>120.50 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>190.50 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
        
      
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160809615.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160809615.png" alt="พื้นฐานความรู้สำหรับวิศวกรระบบป้องกัน">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160809615.php" style="text-decoration: none;"><font color="#000000"><strong>พื้นฐานความรู้สำหรับวิศวกรระบบป้องกัน</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>297.50 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>330.50 บาท</del></td>
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
                <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160812189.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160812189.png" alt="เหมาะสำหรับผู้รับเหมา วิศวกร ช่าง อาจารย์ นักศึกษาสาขาวิศวกรรม เพื่อใช้">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160812189.php" style="text-decoration: none;"><font color="#000000"><strong>เหมาะสำหรับผู้รับเหมา วิศวกร ช่าง อาจารย์ นักศึกษาสาขาวิศวกรรม เพื่อใช้</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>240.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>270.50 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160813124.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160813124.png" alt="มีเนื้อหาเกี่ยวกับอุปกรณ์วัดและอุปกรณ์ควบคุมชนิดต่างๆ ของระบบ">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160813124.php" style="text-decoration: none;"><font color="#000000"><strong>มีเนื้อหาเกี่ยวกับอุปกรณ์วัดและอุปกรณ์ควบคุมชนิดต่างๆ ของระบบ</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>225.00 บาท</strong></td>
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
                <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9786160813896.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160813896.png" alt="คู่มือสำหรับผู้รักการถ่ายภาพทุกระดับ">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160813896.php" style="text-decoration: none;"><font color="#000000"><strong>คู่มือสำหรับผู้รักการถ่ายภาพทุกระดับ </strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>287.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>200.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/Education/ScienceAndTechnollogy.php/9789742122287.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9789742122287.png" alt="แนะนำการออกแบบโครงสร้างไม้และเหล็กไว้อย่างละเอียด ">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9789742122287.php" style="text-decoration: none;"><font color="#000000"><strong>แนะนำการออกแบบโครงสร้างไม้และเหล็กไว้อย่างละเอียด </strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>190.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>175.00 บาท</del></td>
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