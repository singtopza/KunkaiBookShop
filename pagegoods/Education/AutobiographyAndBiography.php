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
          <p class="homegoods mt-3">อัตชีวประวัติ ชีวประวัติ</p>
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160832958.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786160832958.png" alt="ไผ่นอกกอ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786160832958.php" style="text-decoration: none;"><font color="#000000"><strong>ไผ่นอกกอ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>259.00 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>269.50 บาท</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786163884329.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786163884329.png" alt="ความคิด และวาทะ สี จิ้นผิง">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786163884329.php" style="text-decoration: none;"><font color="#000000"><strong>ความคิด และวาทะ สี จิ้นผิง</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>465.50 บาท</strong></td>
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
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786163884633.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786163884633.png" alt="ชุมนุมชีวประวัติ">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786163884633.php" style="text-decoration: none;"><font color="#000000"><strong>ชุมนุมชีวประวัติ</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>408.50 บาท</strong></td>
                          <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                        </tr>
                        <tr>
                          <td class="card-textcut"><del>430.00</del></td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 100%; height: 410px;">
              <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164418561.php">
                <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164418561.png" alt="กษัตริย์นักพัฒนาแห่งโลก">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164418561.php" style="text-decoration: none;"><font color="#000000"><strong>กษัตริย์นักพัฒนาแห่งโลก</strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong>94.05 บาท</strong></td>
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
        </div> <!--end row-->
          <div class="row mt-4">
            <div class="col-3">
              <div class="card" style="width: 100%; height: 410px;">
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164418592.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164418592.png" alt="พระราชศรัทธาในพระพุทธศาสนาของพระบาทสมเด็จพระเจ้าอยู่หัว รัชกาลที่ 9">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164418592.php" style="text-decoration: none;"><font color="#000000"><strong>พระราชศรัทธาในพระพุทธศาสนาของพระบาทสมเด็จพระเจ้าอยู่หัว รัชกาลที่ 9</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>94.05 บาท</strong></td>
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
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164650213.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786164650213.png" alt="อัตชีวประวัติ หม่อมศรีพรหมา กฤดากร">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786164650213.php" style="text-decoration: none;"><font color="#000000"><strong>อัตชีวประวัติ หม่อมศรีพรหมา กฤดากร</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>361.00 บาท</strong></td>
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
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786165108188.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786165108188.png" alt="อัตชีวประวัติ แอกเนส ชาน">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786165108188.php" style="text-decoration: none;"><font color="#000000"><strong>อัตชีวประวัติ แอกเนส ชาน</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>460.75 บาท</strong></td>
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
                <a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786167368979.php">
                  <img class="card-img-top" src="../../img/img_bookall/viewimg/9786167368979.png" alt="จุดหมาย ไม่ใช่ปลายทาง : อัตชีวประวัติของนักเดินเท้า">
                </a>
                    <div class="card-body">
                        <table>
                          <tr>
                            <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../../pagegoods/GeneralKnowledge/PersonalDevelopment/9786167368979.php" style="text-decoration: none;"><font color="#000000"><strong>จุดหมาย ไม่ใช่ปลายทาง : อัตชีวประวัติของนักเดินเท้า</strong></font></a></td>
                          </tr>
                        </table>
                        <table>
                          <tr>
                            <td class="card-text"><strong>437.00 บาท</strong></td>
                            <td rowspan="2" class="basketright"><img class="clickadd" src="../../img/basket-re1.png" width="40" height="40"></td>
                          </tr>
                          <tr>
                            <td class="card-textcut"><del>460.00</del></td>
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