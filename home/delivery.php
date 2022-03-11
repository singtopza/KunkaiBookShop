<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');
$querydelivery = "SELECT * FROM orders WHERE UserID = $UserID GROUP BY OrderNumber ORDER BY DAndT DESC";
$resultdelivery = mysqli_query($connect, $querydelivery);
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
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
            <table width="100%">
              <tr>
                <td width="20%">
                <p class="headerreg fs20 pt-5">เลือกหมายเลขคำสั่งซื้อ : </p>
                </td>
                <td width="80%">
                  <div class="form-group pt-3">
                    <select class="form-control" type="text" id="cod_id">
                    <?php while($rowdelivery = mysqli_fetch_assoc($resultdelivery)){?>
                    <option value="<?php echo $rowdelivery["OrderNumber"]; ?>"><?php echo $rowdelivery["OrderNumber"]; ?></option>
                    <?php } ?>
                    </select>
                    </div>
                </td>
              </tr>
            </table>

            <div class="row">
            <div class="col-8">
            <table class="cod_table" width="100%">
              <tr>
                <td colspan="5" class="text-left">
                <p class="headerreg fs20 pt-3">สถานะการจัดส่ง</p>
                </td>
              </tr>
              <tr>
                <td width="22%">
                  <img src="../img/DeliveryStep1.png" class="cod_fiximg1" width="50%">
                  <p class="cod_fiximg1 fs15">การเตรียมสินค้า</p>
                </td>
                <td width="17%">
                  <img src="../img/DeliveryNext.png" class="cod_pbimg" width="35%">
                </td>
                <td width="22%">
                  <img src="../img/DeliveryStep2.png" class="cod_fiximg2" width="50%">
                  <p class="cod_fiximg2 fs15">กำลังจัดส่ง</p>
                </td>
                <td width="17%">
                  <img src="../img/DeliveryNext.png" class="cod_pbimg" width="35%">
                </td>
                <td width="22%">
                  <img src="../img/DeliveryStep3.png" class="cod_fiximg3" width="50%">
                  <p class="cod_fiximg3 fs15">จัดส่งสำเร็จ</p>
                </td>
              </tr>
              <tr>
            </table>
            <div class="row">
              <div class="col-4">
                <p>ชื่อบริษัทจัดส่งพัสดุ :</p>
                <p>หมายเลขติดตามพัสดุสินค้า :</p>
              </div>
              <div class="col-8">
                <p>Kunkai Express</p>
                <p>KK195458257TH</p>
              </div>
              </div>
              <p class="headerreg fs20 pt-3">สินค้า</p>
              <div class="bg_bin px-3 py-2">
              <div class="row text-center align-items-center">
                <div class="col-2">
                  <table>
                    <tr>
                      <td>
                        <a href="../pagegoods/GeneralKnowledge/PersonalDevelopment/9786161830342.php">
                        <img src="../img/img_bookall/fullimg/9786161830342.jpg" width="50%">
                        </a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-8 text-left">
                  <span>เราทุกคนล้วนมีร้านเวทมนตร์อยู่ในใจ</span>
                </div>
                <div class="col-2 text-right">
                  <span>2 เล่ม</span>
                </div>
              </div>
              <div class="row text-center align-items-center">
                <div class="col-2">
                  <table>
                    <tr>
                      <td>
                        <a href="../pagegoods/GeneralKnowledge/PersonalDevelopment/9786162873829.php">
                        <img src="../img/img_bookall/fullimg/9786162873829.jpg" width="50%">
                      </a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-8 text-left">
                  <span>อย่าเป็นคนเก่งที่คุยไม่เป็น</span>
                </div>
                <div class="col-2 text-right">
                  <span>1 เล่ม</span>
                </div>
              </div>
            </div>
              <p class="headerreg fs20 pt-3">ข้อมูลใบเสร็จ</p>
              <div class="row">
                <div class="col-3">
                  <p>สถานะการชำระเงิน :</p>
                  <p>ที่อยู่ในการจัดส่งสินค้า :</p>
                </div>
                <div class="col-9">
                  <p class="text-success"><strong>COD 1,662.50 บาท</strong></p>
                  <p>ศรัณย์ เวียงสิมมา 0611230387 168 หมู่ 2 บ้านหนองขาม ตำบลทุ่งขวาง, อำเภอกำแพงแสน, จังหวัดนครปฐม, 73140</p>
                </div>
              </div>
                  <div class="row">
                  <div class="col-3">
                    <p>เบอร์ติดต่อ :</p>
                    <p>ราคาสินค้า :</p>
                    <p>ค่าจัดส่ง :</p>
                    <p>ส่วนลด :</p>
                    <p><strong>รวมเป็นเงินทั้งสิ้น :</strong></p>
                  </div>
                  <div class="col-9">
                    <p>0611230387</p>
                    <p>674.50 บาท</p>
                    <p>1,000 บาท</p>
                    <p class="mbasket">- 12 บาท</p>
                    <p><strong>1,662.50 บาท</strong></p>
                  </div>
                  </div>
            </div> <!-- Eng col-9 -->
            <div class="col-4 border-left">
              <p class="headerreg fs20 pt-3 text-center">สถานะสินค้า</p>
              <div class="pl-4">
              <span class="text-success"><strong>สินค้าถูงบรรจุลงกล่อง</strong></span><br>
              <span class="text-muted"><i>วันที่ 01/01/63 เวลา 06.05</i></span><br><br>
              <span class="text-success"><strong>พัสดุถูกส่งมอบให้กับบริษัทจัดส่งสินค้า</strong></span><br>
              <span class="text-muted"><i>วันที่ 01/01/63 เวลา 08.31</i></span><br><br>
              <span class="text-success"><strong>พัสดุถึงศูนย์คัดแยกสินค้า KK-BKK</strong></span><br>
              <span class="text-muted"><i>วันที่ 01/01/63 เวลา 10.46</i></span><br><br>
              <span class="text-success"><strong>พัสดุออกจากศูนย์คัดแยกสินค้า KK-BKK</strong></span><br>
              <span class="text-muted"><i>วันที่ 01/01/63 เวลา 15.20</i></span><br><br>
              <span class="text-success"><strong>พัสดุถึงสาขาปลายทาง</strong></span><br>
              <span class="text-muted"><i>วันที่ 02/01/63 เวลา 08.38</i></span><br><br>
              <span class="text-success"><strong>พัสดุรอนำส่ง</strong></span><br>
              <span class="text-muted"><i>วันที่ 03/01/63 เวลา 08.56</i></span><br><br>
              <span class="text-danger"><strong>ไม่สามารถติดต่อปลายทางได้</strong></span><br>
              <span class="text-muted"><i>วันที่ 03/01/63 เวลา 11.42</i></span><br><br>
              <span class="text-success"><strong>พัสดุรอนำส่ง</strong></span><br>
              <span class="text-muted"><i>วันที่ 04/01/63 เวลา 09.10</i></span><br><br>
              <span class="text-success"><strong>นำส่งพัสดุสำเร็จ (คุณศรัณย์ผู้รับ)</strong></span><br>
              <span class="text-muted"><i>วันที่ 04/01/63 เวลา 12.13</i></span>
            </div>
            </div> <!-- Eng col-3 -->
            </div> <!-- Eng first row -->
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
</body>
</html>