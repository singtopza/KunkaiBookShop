<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');

$newaddress = "SELECT * FROM address WHERE UserID = $UserID";
$resultnewaddress = mysqli_query($connect,$newaddress);
$countnewaddress = mysqli_num_rows($resultnewaddress);

$cbproduct = $_POST["cbproduct"];
if(!isset($cbproduct)){
  echo "<script type='text/javascript'>alert('คำเตือน: โปรดเลือกสินค้าก่อนทำการชำระเงิน!');</script>";
  echo ("<script>window.location = '../home/basket.php';</script>");
}
$multicbproduct = implode(",",$cbproduct);
$sqlcbproduct = "SELECT * FROM basket WHERE BasketNumber IN ($multicbproduct) AND UserID = $UserID";
$rscbproduct = mysqli_query($connect,$sqlcbproduct);

$basketsqlsum = "SELECT SUM(PriceTotal) AS PriceTotal FROM basket WHERE BasketNumber IN ($multicbproduct) AND UserID = $UserID";
$rbasketsum = mysqli_query($connect,$basketsqlsum);
$rbasketsumrow = mysqli_fetch_assoc($rbasketsum);
$rbasketsumrowBath = $rbasketsumrow["PriceTotal"];

$sqlcbproduct_amount = "SELECT SUM(BookAmount) AS BookAmount FROM basket WHERE BasketNumber IN ($multicbproduct) AND UserID = $UserID";
$rscbproduct_amount = mysqli_query($connect,$sqlcbproduct_amount);
$rowrscbproduct_amount = mysqli_fetch_assoc($rscbproduct_amount);
require ("../php/countshipping.php");

$newaddress2 = "SELECT * FROM addressselect WHERE UserIDSelect = $UserID";
$resultnewaddress2 = mysqli_query($connect,$newaddress2);
$countnewaddress2 = mysqli_num_rows($resultnewaddress2);

$sql_provinces = "SELECT * FROM provinces ORDER BY name_th ASC";
$query_provinces = mysqli_query($connect, $sql_provinces);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/allpage.js"></script>
  <style>
.form-inline .form-control {
    width: 100%;
}
.modal-body {
    padding: 0rem 1rem 0rem 1rem;
}
.modal-footer#footerNewaddress {
    padding: 0rem 0.75rem 0.75rem 0.75rem;
    border-top: 0px solid #dee2e6;
}
</style>
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
        <h4 class="headerbasket text-center py-5">ตรวจสอบข้อมูล</h4>
        <div class="bg-address container pl-5 pb-1 pt-4 mb-4">
          <div class="fs18 pb-2"><i class="fa fa-map-marker fa-lg" style="color:red;"></i>&nbsp;&nbsp;ที่อยู่ในการจัดส่ง</div>
          <span><?php
            if ($countnewaddress2 > 0){
              $rnewaddresse2 = mysqli_fetch_assoc($resultnewaddress2);
              echo $rnewaddresse2["UserNameSelect"]." ".$rnewaddresse2["UserAddressSelect"]."<br> จังหวัด: ".$rnewaddresse2["ProvinceSelect"]." อำเภอ: ".$rnewaddresse2["DistrictSelect"]." ตำบล: ".$rnewaddresse2["Sub_DistrictSelect"]." ".$rnewaddresse2["Postal_CodeSelect"]." เบอร์ติดต่อ +66 ".$rnewaddresse2["UserPhoneSelect"];
            }
            else { ?>
              <span class="text-center text-danger">กรุณาเลือกที่อยู่สำหรับการจัดส่ง</span>
              <?php
            }  
            ?>
        </span><br>
          <p class="text-right pr-4" style="cursor: pointer;" data-toggle="modal" data-target="#modaladdress"><font color="#0963FF">จัดการที่อยู่</font></p>
          <div class="modal fade" id="modaladdress" tabindex="-1" role="dialog" aria-labelledby="modaladdresslabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modaladdresslabel">ที่อยู่สำหรับการจัดส่ง</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="../php/selectaddress.php" method="POST">
                <?php if ($countnewaddress > 0){
                  while($rnewaddress = mysqli_fetch_assoc($resultnewaddress)){?>
                  <div class="form-check py-2">
                    <input class="form-check-input" type="radio" name="radioaddress[]" id="chooseaddress[<?php echo $rnewaddress["AddressNB"]; ?>]" value="<?php echo $rnewaddress["AddressNB"]; ?>" checked>
                    <label class="form-check-ladel ml-2" for="chooseaddress[<?php echo $rnewaddress["AddressNB"]; ?>]">
                    <?php echo $rnewaddress["UserName"].", ".$rnewaddress["UserAddress"]." จังหวัด: ".$rnewaddress["Province"]." อำเภอ: ".$rnewaddress["District"]." ตำบล: ".$rnewaddress["Sub_District"]." ".$rnewaddress["Postal_Code"].", ".$rnewaddress["UserPhone"];?>
                    </label>
                    <div class="text-right pr-4">
                      <span><font color="#0963FF">แก้ไข</font></span>
                      <a href="../database/kkdeleteaddress.php?AddressNB=<?php echo $rnewaddress["AddressNB"]; ?>"><span><font color="#FF0000">ลบ</font></span></a>
                    </div>
                  </div>
                  <div class="row border-bottom"></div>
                  <?php
                  }
                  } else { ?>
                <div class="text-center">
                  <p class="mt-4 text-danger">คุณยังไม่ได้เพิ่มที่อยู่</p>
                </div>
                <style>
                  #btnsbaddress{
                  display:none;
                  }
                  </style>
                  <?php } ?>
                </div>
                <a style="text-decoration: none;" class="text-center pt-2 pb-4" data-toggle="modal" data-target="#modalnewaddress"><button type="button" class="btn text-primary">เพิ่มที่อยู่</button></a>
                <div class="modal-footer">
                  <a class="btn btn-secondary text-white" data-dismiss="modal">ยกเลิก</a>
                  <input type="submit" class="btn btn-success text-white" id="btnsbaddress" value="ยืนยัน">
                  </form>
                </div>
              </div>
            </div>
          </div> <!--End Modal-->

          <div class="modal fade pr-3" id="modalnewaddress" tabindex="-1" role="dialog" aria-labelledby="modalnewaddresslabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalnewaddresslabel">เพิ่มที่อยู่สำหรับการจัดส่ง</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="../database/kknewaddress.php" method="POST">
        <label for="newaddname" class="mt-3">ชื่อ - นามสกุลผู้รับ :</label>
        <input class="form-control mb-3" type="text" id="newaddname" name="newaddname" required>
        <label for="newaddress">ที่อยู่สำหรับการจัดส่ง :</label>
        <textarea class="form-control mb-3" type="text" rows ="3" cols ="60" id="newaddress" name="newaddress" required></textarea>
      <label for="sel1">จังหวัด :</label>
      <select class="form-control mb-3" name="Ref_prov_id" id="provinces" required>
            <option value="" selected disabled></option>
             <?php foreach ($query_provinces as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
      </select>
      <label for="amphures">อำเภอ :</label>
      <select class="form-control mb-3" name="Ref_dist_id" id="amphures" required>
      </select>
      <label for="districts">ตำบล :</label>
      <select class="form-control mb-3" name="Ref_subdist_id" id="districts" required>
      </select>
      <label for="zip_code">รหัสไปรษณีย์ :</label>
       <input class="form-control deleteupdown"  onkeydown="javascript: return event.keyCode == 69 ? false : true" name="zip_code" id="zip_code" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required>
          <label for="newaddphone">เบอร์ติดต่อ :</label>
          <input class="form-control deleteupdown" type="number" id="newaddphone" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="Phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>
                </div>
                <div class="modal-footer" id="footerNewaddress">
                <button type="submit" class="btn btn-warning btn-block text-black">เพิ่มที่อยู่</button>
                </div>
                </form>
              </div>
            </div>
          </div> <!--End Modal-->

        </div>
        <div class="basketheader row border-bottom text-center pb-1 mb-3">
        <div class="col-1">
              <span>ลำดับ</span>
          </div>
          <div class="col-2">
              <span>สินค้า</span>
          </div>
          <div class="col-5 text-left">
            <span>ชื่อหนังสือ</span>
          </div>
          <div class="col-2 text-right">
            <span>จำนวน</span>
          </div>
          <div class="col-2 text-right">
            <span>ราคารวม</span>
          </div>
        </div>
        <?php 
        $nnproduct=1;
        while ($rowrscbproduct = mysqli_fetch_assoc($rscbproduct)){ //ตะกล้า
          $SL_BookISBN = $rowrscbproduct["BookISBN"];
          $SL_BookName = $rowrscbproduct["BookName"];
          $SL_BookAmount = $rowrscbproduct["BookAmount"];

          $selectbook_order = "SELECT * FROM books WHERE BookISBN = $SL_BookISBN";
          $selectbook_order_q = mysqli_query($connect,$selectbook_order);
          $selectbook_order_fetch = mysqli_fetch_assoc($selectbook_order_q);
          $SL_BookStock = $selectbook_order_fetch["BookStock"];
          $SL_BookStock = $SL_BookStock-$SL_BookAmount;
          if($SL_BookStock < 0){  //ถ้าของจะเหลือน้อยกว่า 0 จะซื้อไม่ได้
            echo "<script>alert('สินค้า \"$SL_BookName\" ไม่เพียงพอสำหรับสั่งซื้อ\\nรหัสสินค้าสินค้า $SL_BookISBN\\n\\nโปรดลองใหม่อีกครั้งในภายหลัง !');</script>";
            echo ("<script>window.location = '../home/basket.php';</script>");
          }
        ?>
        <div class="row text-center align-items-center">
          <div class="col-1"><?php echo $nnproduct++; ?></div>
          <div class="col-2">
            <table>
              <tr>
                <td class="text-center">
                  <a href="../product/product.php?BookISBN=<?php echo $rowrscbproduct["BookISBN"]; ?>">
                  <img class="pm_basketimg" style="width:50px;" src="../img/img_bookall/fullimg/<?php echo $rowrscbproduct["BookISBN"]; ?>.jpg">
                  </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-5 text-left">
            <span><?php echo $SL_BookName; ?></span>
          </div>
          <div class="col-2 text-right">
            <span><?php echo $SL_BookAmount; ?> เล่ม</span>
          </div>
          <div class="col-2 text-right">
          <?php
          $sum_bookprice = $rowrscbproduct["BookPrice"] * $rowrscbproduct["BookAmount"];
          if(strpos($sum_bookprice,".") !== false){
          ?>
            <span><?php echo number_format($sum_bookprice, 2)." บาท"; ?></span>
          <?php
          } else {
          ?>
            <span><?php echo number_format($sum_bookprice)." บาท"; ?></span>
          <?php
          }
          ?>
          </div>
        </div>
        <p class="my-2"></p>
        <?php
        }
        ?>

        <div class="row border-top pt-3 mt-4">
          <div class="col-6 col-sm-8 col-md-9 col-lg-10 col-xl-10 text-right">
            <p>ราคาสินค้า</p>
            <p>ค่าจัดส่ง</p>
            <p>ส่วนลด</p>
            <p>เหรียญสะสม</p>
            <p><strong>ยอดที่ต้องชำระ</strong></p>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 text-right">
          <p id="rbasketsumrow"></p>
            <p id="shippingcost"></p>
            <p class="mbasket text-warning">&nbsp;</p>
            <p class="">&nbsp;</p>
            <strong><p class="text-danger" id="allpricebasket"></p></strong>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6 col-md-8 col-lg-9 col-xl-9"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a href="../home/payment.php?cbproduct=<?php echo $multicbproduct; ?>">
              <button type="submit" class="confirm-basket btn btn-warning">สั่งสินค้า</button>
            </a>
          </div>
        </div>
        <div style="margin-bottom:100px;"></div>
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
<?php include('../home/edit-address/script.php');?>