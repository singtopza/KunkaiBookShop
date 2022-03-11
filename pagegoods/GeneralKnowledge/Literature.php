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
          <p class="homegoods mt-3">วรรณกรรม</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/Literature/9786160025480.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160025480.png" alt="วรรณกรรมและภาษาถิ่นใต้">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786160025480.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรมและภาษาถิ่นใต้</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>304.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>320.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                </div>
                  </div>
                
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/Literature/9786160432226.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160432226.png" alt="มาสเตอร์พีซ วรรณกรรมระดับโลก ฉบับการ์ตูน เล่ม 1 (ฉบับการ์ตูน)">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786160432226.php" style="text-decoration: none;"><font color="#000000"><strong>มาสเตอร์พีซ วรรณกรรมระดับโลก ฉบับการ์ตูน เล่ม 1 (ฉบับการ์ตูน)</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>140.25 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>165.00 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/Literature/9786160434732.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160434732.png" alt="มาสเตอร์พีซ วรรณกรรมระดับโลก ฉบับการ์ตูน เล่ม 4 (ฉบับการ์ตูน)">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786160434732.php" style="text-decoration: none;"><font color="#000000"><strong>มาสเตอร์พีซ วรรณกรรมระดับโลก ฉบับการ์ตูน เล่ม 4 (ฉบับการ์ตูน)</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>148.75 บาท</strong></td>
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
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/Literature/9786160838769.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160838769.png" alt="วรรณกรรมเอกของไทย">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786160838769.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรมเอกของไทย</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>165.75 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>195.00 บาท</del></td>
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
                <a href="../../pagegoods/GeneralKnowledge/Literature/9786164068667.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164068667.png" alt="วรรณกรรมสำหรับเด็ก">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786164068667.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรมสำหรับเด็ก</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>256.50 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img 
class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
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
                <a href="../../pagegoods/GeneralKnowledge/Literature/9786169306832.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786169306832.png" alt="วรรณกรรม : ประวัติศาสตร์เรื่องเล่าแห่งจินตนาการ">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9786169306832.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรม : ประวัติศาสตร์เรื่องเล่าแห่งจินตนาการ</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>335.75 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img 
class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
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
                <a href="../../pagegoods/GeneralKnowledge/Literature/9789742558017.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9789742558017.png" alt="วรรณกรรมชิ้นสุดท้าย">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9789742558017.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรมชิ้นสุดท้าย</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>209.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img 
class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>220.00 บาท</del></td>
                            <td></td>
                          </tr>
                        </table>
                  </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/Literature/9789747528701.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9789747528701.png" alt="วรรณกรรมน้ำท่วม">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/Education/Literature/9789747528701.php" style="text-decoration: none;"><font color="#000000"><strong>วรรณกรรมน้ำท่วม</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>190.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img 
class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>200.00 บาท</del></td>
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