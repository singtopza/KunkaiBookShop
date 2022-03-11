<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');

$cbproduct2 = $_GET["cbproduct"];
$sqlcbproduct2 = "SELECT * FROM basket WHERE BasketNumber IN ($cbproduct2) AND UserID = $UserID";
$rscbproduct = mysqli_query($connect,$sqlcbproduct2);

$basketsqlsum = "SELECT SUM(PriceTotal) AS PriceTotal FROM basket WHERE BasketNumber IN ($cbproduct2) AND UserID = $UserID";
$rbasketsum = mysqli_query($connect,$basketsqlsum);
$rbasketsumrow = mysqli_fetch_assoc($rbasketsum);
$rbasketsumrowBath = $rbasketsumrow["PriceTotal"];

$sqlcbproduct_amount = "SELECT SUM(BookAmount) AS BookAmount FROM basket WHERE BasketNumber IN ($cbproduct2) AND UserID = $UserID";
$rscbproduct_amount = mysqli_query($connect,$sqlcbproduct_amount);
$rowrscbproduct_amount = mysqli_fetch_assoc($rscbproduct_amount);
require ("../php/countshipping.php");

$newaddress2 = "SELECT * FROM addressselect WHERE UserIDSelect = $UserID";
$resultnewaddress2 = mysqli_query($connect,$newaddress2);
$countnewaddress2 = mysqli_num_rows($resultnewaddress2);
if($countnewaddress2!=1){
  echo "<script type='text/javascript'>alert('คำเตือน: โปรดเลือกที่อยู่สำหรับการจัดส่ง!\\n#ตามขั้นตอนดังนี้\\n- กดชำระเงินที่หน้าตะกร้าสินค้า\\n- จากนั้นเลือกจัดการที่อยู่ และเลือกที่อยู่ที่ต้องการจัดส่ง');</script>";
  echo ("<script>window.location = '../home/basket.php';</script>");
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
  <script src="../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <!-- <font color="#949494"> -->
        <h4 class="headerbasket text-center py-5">เลือกรูปแบบการชำระเงิน</h4>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="radio pb-3">
              <label><img src="../img/pm_mbbank.png" class="setimgpm pr-2" style="opacity: 0.5;"> <input type="radio" name="paymentselect" disabled><font color="#949494"> Mobile Banking</font></label>
            </div>
            <div class="radio pb-3">
              <label><img src="../img/pm_caditcard.png" class="setimgpm pr-2"> <input type="radio" name="paymentselect" onclick="javascript:pm_js();" id="pm_caditcard_c"> บัตรเครดิต / เดบิต</label>
            </div>
            <div class="radio pb-3">
              <label><img src="../img/pm_paypal.png" class="setimgpm pr-2"> <input type="radio" name="paymentselect" onclick="javascript:pm_js();" id="pm_paypal_c"> Paypal</label>
          </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
          <div class="radio pb-3">
              <label><img src="../img/pm_turewallet.png" class="setimgpm pr-2"> <input type="radio" name="paymentselect" onclick="javascript:pm_js();" id="pm_truewallet_c"> TureMoney Wallet</label>
          </div>
          <div class="radio pb-3">
            <label><img src="../img/pm_money.png" class="setimgpm pr-2"> <input type="radio" name="paymentselect" onclick="javascript:pm_js();" id="pm_money_c"> ชำระเงินปลายทาง</label>
          </div>
          <div class="radio pb-3">
            <label><img src="../img/pm_coin.png" class="setimgpm pr-2" style="opacity: 0.5;"> <input type="radio" name="paymentselect" disabled><font color="#949494"> เหรียญสะสม Kunkai</font></label>
        </div>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-lg-4 col-xl-4">
            <div class="bg_bin row pt-3 mx-3">
              <div class="row">
                <div class="col-12">
                  <p class="text-center"><strong>ข้อมูลใบเสร็จ</strong></p>
                </div>
              <div class="col-5 text-right">
                <p>ราคาสินค้า</p>
                <p>ค่าจัดส่ง</p>
                <p>ส่วนลด</p>
                <p>เหรียญสะสม</p>
                <p><strong>ยอดที่ต้องชำระ</strong></p>
              </div>
              <div class="col-7 text-right pr-5">
                <p id="rbasketsumrow"></p>
                <p id="shippingcost"></p>
                <p class="mbasket">&nbsp;</p>
                <p class="">&nbsp;</p>
                <strong><p class="text-danger" id="allpricebasket"></p></strong>
              </div>
              
            <?php
            require "../database/numbertothai.php";
            $num1 = $rbasketsumrow["PriceTotal"]+$shippingcost;
            ?>
            <div class="col-12 text-center">
              <p id="allpricebasket_thai" class="fs13"><strong><u><?php echo Convert($num1); ?></u></strong></p>
            </div>

            </div>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div id="pm_caditcard_s" class="pt-5 pb-5" style="display:none">
              <h5>บัตรเครดิต / เดบิต</h5>
              <div class="icon-container my-3">
                <i class="fa fa-cc-visa fa-2x" style="color:navy;"></i>
                <i class="fa fa-cc-amex fa-2x" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard fa-2x" style="color:rgb(255, 174, 0);"></i>
                <i class="fa fa-cc-discover fa-2x" style="color:rgb(216, 147, 18);"></i>
                <i class="fa fa-cc-diners-club fa-2x" style="color:rgb(21, 0, 212);"></i>
                <i class="fa fa-cc-jcb fa-2x" style="color:rgb(5, 138, 0);"></i>
              </div>
              <form action="../home/ordered.php">
              <span>หมายเลขบัตร <br></span><input type="text-pm_card" class="pm_cardicon pl-3" placeholder="XXXX-XXXX-XXXX-XXXX" required><br>
              <span>ชื่อบนบัตร <br></span><input type="text-pm_card" class="pl-3" placeholder="XXXXX XXXXX" required><br>
              <table  class="pm_tb1">
                <tr>
                  <td><span>วันหมดอายุ</span></td>
                  <td><span>รหัสหลังบัตร</span></td>
                </tr>
                <tr>
                  <td><input type="text-pm_card_exp" class="pl-3" placeholder="MM/YY" required></td>
                  <td><input type="text-pm_card_exp" class="pl-3" placeholder="XXX" required></td>
                </tr>
              </table>
              <input type="submit" class="pm_sm" value="ชำระเงิน">
            </form>
          </div>
          <div id="pm_money_s" class="pt-5 pb-5" style="display:none">
            <h5>ชำระเงินปลายทาง</h5>
          <p>หากคุณต้องการชำระเงินปลายทาง โปรดเตรียมเงินให้พร้อม เมื่อเจ้าหน้าที่ขนส่งมาถึง</p>
            <img class="pb-5" src="../img/cod.png" width="250px"><br>
            <a href="../database/kkaddorder.php?cbproduct=<?php echo $cbproduct2; ?>">
            <input type="submit" class="pm_sm" value="ชำระเงิน">
            </a>
        </div>
        <div id="pm_paypal_s" class="pt-5 pb-5" style="display:none">
          <h5>ชำระเงินด้วย Paypal <i class="fa fa-cc-paypal fa-lg" style="color:rgb(0, 40, 219);"></i></h5>
          <form action="https://www.paypal.com/invoice/p/#ET4R7STMKF6LDP99" target="_blank">
        <p class="pb-3">ยอดเงิน 89.00 จะถูกเก็บจากคุณ <font color="#FF0000">*ไม่รวมค่าธรรมเนียม 7%</font></p>
          <input type="submit" class="pm_sm" value="ชำระเงิน">
        </form>
      </div>
      <div id="pm_truewallet_s" class="pt-5 pb-5" style="display:none">
        <h5>ชำระเงินด้วย True Money Wallet</h5>
        <form action="../home/ordered.php">
          <img class="pb-5 pt-4" src="../img/pm_truewalletbanner.png" width="20%"><br>
          <p>โอนเงินเข้าสู่บัญชี True Money Wallet หมายเลข 02-345-678</p>
          <span>เลขอ้างอิง <br></span><input type="text-pm_card" class="pl-3" placeholder="XXXXXXXXXXXXXXXX" required><br>
          <label for="pm_truewallet_file">เลือกสลิป : </label>
          <input type="file" id="file" name="pm_truewallet_file" required><br><br>
        <input type="submit" class="pm_sm" value="ชำระเงิน">
      </form>
    </div>
  </div>
  </div> <!--Eng row pm-->

  <h4 class="headerbasket text-center py-2 mt-3">ข้อมูลสินค้า</h4>
  <div class="basketheader row border-bottom text-center pb-1 mb-3">
        <div class="col-1">
              <span>ลำดับ</span>
          </div>
          <div class="col-2">
              <span>สินค้า</span>
          </div>
          <div class="col-7 text-left">
            <span>ชื่อหนังสือ</span>
          </div>
          <div class="col-2 text-right">
            <span>จำนวน</span>
          </div>
        </div>
        <?php 
        $nnproduct=1;
        while ($rowrscbproduct = mysqli_fetch_assoc($rscbproduct)){
        ?>
        <div class="row text-center align-items-center">
          <div class="col-1"><?php echo $nnproduct++; ?></div>
          <div class="col-2">
            <table>
              <tr>
                <td class="text-center">
                  <a href="../product/product.php?BookISBN=<?php echo $rowrscbproduct["BookISBN"]; ?>">
                  <img class="pm_basketimg" src="../img/img_bookall/fullimg/<?php echo $rowrscbproduct["BookISBN"]; ?>.jpg" style="width:50px;">
                  </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-7 text-left">
            <span><?php echo $rowrscbproduct["BookName"]; ?></span>
          </div>
          <div class="col-2 text-right">
            <span><?php echo $rowrscbproduct["BookAmount"]; ?> เล่ม</span>
          </div>
        </div>
        <p class="my-2"></p>
        <?php
        }
        ?>
        <div class="row border-top pt-3 mt-3"></div>
        <div style="margin-bottom:200px;"></div>
        <!--ช่องว่าง ปิด-->
      </div>
      <?php
require ('../style/footer.php');
?>
<script>
  $('.btn-plus, .btn-minus').on('click', function(e) {
    const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    const input = $(e.target).closest('.input-group').find('input');
    if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
  })
</script>
<script>
  function pm_js() {
      if (document.getElementById('pm_caditcard_c').checked) {
          document.getElementById('pm_caditcard_s').style.display = 'block';
          document.getElementById('pm_money_s').style.display = 'none';
          document.getElementById('pm_paypal_s').style.display = 'none';
          document.getElementById('pm_truewallet_s').style.display = 'none';
      }
      else if (document.getElementById('pm_money_c').checked) {
          document.getElementById('pm_money_s').style.display = 'block';
          document.getElementById('pm_caditcard_s').style.display = 'none';
          document.getElementById('pm_paypal_s').style.display = 'none';
          document.getElementById('pm_truewallet_s').style.display = 'none';
      }
      else if (document.getElementById('pm_paypal_c').checked) {
          document.getElementById('pm_paypal_s').style.display = 'block';
          document.getElementById('pm_caditcard_s').style.display = 'none';
          document.getElementById('pm_money_s').style.display = 'none';
          document.getElementById('pm_truewallet_s').style.display = 'none';
      }
      else if (document.getElementById('pm_truewallet_c').checked) {
          document.getElementById('pm_truewallet_s').style.display = 'block';
          document.getElementById('pm_caditcard_s').style.display = 'none';
          document.getElementById('pm_money_s').style.display = 'none';
          document.getElementById('pm_paypal_s').style.display = 'none';
      }
  }
</script>
<script language="JavaScript1.2">
  function disableselect(e){
  return false
  }
  function reEnable(){
  return true
  }
  document.onselectstart=new Function ("return false")
  if (window.sidebar){
  document.onmousedown=disableselect
  document.onclick=reEnable
  }
  </script>
<?php
$sum_price_basket = $rbasketsumrow["PriceTotal"]+$shippingcost;
?>
<script>
  $(document).ready(function() {
    let sumpricebasket = <?php echo $sum_price_basket; ?>;
    if(sumpricebasket == 0){

    } else {
      document.getElementById("allpricebasket").innerHTML = new Intl.NumberFormat().format(sumpricebasket)+" บาท";
      document.getElementById("rbasketsumrow").innerHTML = new Intl.NumberFormat().format(<?php echo $rbasketsumrowBath ;?>)+" บาท";
      document.getElementById("shippingcost").innerHTML = new Intl.NumberFormat().format(<?php echo $shippingcost; ?>)+" บาท";
    }
  });
</script>
</body>
</html>