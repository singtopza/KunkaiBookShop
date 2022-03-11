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
          <p class="homegoods mt-3">การพัฒนาตนเอง</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161830342.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786161830342.png" alt="เราทุกคนล้วนมีร้านเวทมนตร์อยู่ในใจ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161830342.php" style="text-decoration: none;"><font color="#000000"><strong>เราทุกคนล้วนมีร้านเวทมนตร์อยู่ในใจ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>232.75 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>245.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161826567.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786161826567.png" alt="เลิกเป็นคนดี แล้วจะมีความสุข">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161826567.php" style="text-decoration: none;"><font color="#000000"><strong>เลิกเป็นคนดี แล้วจะมีความสุข</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>213.75 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"><span></span></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>225.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161834043.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786161834043.png" alt="12 กฎที่ใช้ได้ตลอดชีวิต : 12 Rules For Life">
                </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161834043.php" style="text-decoration: none;"><font color="#000000"><strong>12 กฎที่ใช้ได้ตลอดชีวิต : 12 Rules For Life</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>375.25 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>395.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786162873829.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786162873829.png" alt="อย่าเป็นคนเก่งที่คุยไม่เป็น">
              </a>  
                    <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786162873829.php" style="text-decoration: none;"><font color="#000000"><strong>อย่าเป็นคนเก่งที่คุยไม่เป็น</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>209.00 บาท</strong></td>
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
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160005307.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160005307.png" alt="การพัฒนาตนเองสู่ความเป็นผู้นำ">
                </a>  
                      <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160005307.php" style="text-decoration: none;"><font color="#000000"><strong>การพัฒนาตนเองสู่ความเป็นผู้นำ</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>102.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>120.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160005529.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160005529.png" alt="การพัฒนาตนเองสู่ความเป็นอัจฉริยภาพ">
                </a>  
                      <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160005529.php" style="text-decoration: none;"><font color="#000000"><strong>การพัฒนาตนเองสู่ความเป็นอัจฉริยภาพ</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>93.50 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>110.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160826773.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160826773.png" alt="ได้เวลาตื่นแล้ว! คุณผู้หญิง : It's Rising Time!">
                </a>  
                      <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160826773.php" style="text-decoration: none;"><font color="#000000"><strong>ได้เวลาตื่นแล้ว! คุณผู้หญิง : It's Rising Time!</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>270.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>229.50 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786167752136.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786167752136.png" alt="เหนื่อยชั่วคราว สบายชั่วโคตร">
                </a>  
                      <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786167752136.php" style="text-decoration: none;"><font color="#000000"><strong>เหนื่อยชั่วคราว สบายชั่วโคตร</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>225.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>191.25 บาท</del></td>
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