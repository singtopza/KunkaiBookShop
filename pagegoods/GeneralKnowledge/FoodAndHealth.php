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
          <p class="homegoods mt-3">อาหารและสุขภาพ</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786160440290.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160440290.png" alt="กินเปลี่ยนชีวิต ด้วยอาหาร 100 ชนิดจากธรรมชาติ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786160440290.php" style="text-decoration: none;"><font color="#000000"><strong>กินเปลี่ยนชีวิต ด้วยอาหาร 100 ชนิดจากธรรมชาติ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>395.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>375.25 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786160826841.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160826841.png" alt="100 คำถามวิทย์สุด Smart : WOW! อาหารและสุขภาพ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786160826841.php" style="text-decoration: none;"><font color="#000000"><strong>100 คำถามวิทย์สุด Smart : WOW! อาหารและสุขภาพ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>159.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>135.15 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786163932860.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786163932860.png" alt="กินดี ต้องมีผัก">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786163932860.php" style="text-decoration: none;"><font color="#000000"><strong>กินดี ต้องมีผัก</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>160.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>152.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786164030718.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164030718.png" alt="ป้องกันลูกป่วยด้วยอาหารสุขภาพ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786164030718.php" style="text-decoration: none;"><font color="#000000"><strong>ป้องกันลูกป่วยด้วยอาหารสุขภาพ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>295.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>280.25 บาท</del></td>
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
                <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165305778.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786165305778.png" alt="กินดี แคลอรีต่ำ">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165305778.php" style="text-decoration: none;"><font color="#000000"><strong>กินดี แคลอรีต่ำ</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>99.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>94.05 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165306515.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786165306515.png" alt="เมนูคลีนกับชีวิตประจำวัน">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165306515.php" style="text-decoration: none;"><font color="#000000"><strong>เมนูคลีนกับชีวิตประจำวัน</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>99.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>94.05 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165306768.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786165306768.png" alt="เมนูสุขภาพ ทำง่าย รายได้ดี">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165306768.php" style="text-decoration: none;"><font color="#000000"><strong>เมนูสุขภาพ ทำง่าย รายได้ดี</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>99.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>94.05 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165307130.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786165307130.png" alt="Salad & Smoothie Bowl">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/FoodAndHealth/9786165307130.php" style="text-decoration: none;"><font color="#000000"><strong>Salad & Smoothie Bowl</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>220.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>209.00 บาท</del></td>
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