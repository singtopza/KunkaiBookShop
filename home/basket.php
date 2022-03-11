<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');

$basketsqlsum = "SELECT SUM(PriceTotal) AS PriceTotal FROM basket WHERE UserID = $UserID";
$rbasketsum = mysqli_query($connect,$basketsqlsum);
$rbasketsumrow = mysqli_fetch_assoc($rbasketsum);
$rbasketsumrowBath = $rbasketsumrow["PriceTotal"];

$newaddress = "SELECT * FROM address WHERE UserID = $UserID ORDER BY AddressNB ASC";
$resultnewaddress = mysqli_query($connect,$newaddress);
$countnewaddress = mysqli_num_rows($resultnewaddress);

$newaddress2 = "SELECT * FROM addressselect WHERE UserIDSelect = $UserID";
$resultnewaddress2 = mysqli_query($connect,$newaddress2);
$countnewaddress2 = mysqli_num_rows($resultnewaddress2);
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

<style>
.form-inline .form-control {
    width: 100%;
}
.bk_hide { 
display: block; 
}
@media screen and (max-width: 767px) {
.bk_hide { 
display: none; }
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
        <h4 class="headerbasket text-center py-5">ตะกร้าสินค้า</h4>
        <div class="basketheader row border-bottom text-center pb-3">
          <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
            <div class="form-check">
            <!-- checked -->
              <input type="checkbox" class="Checkproduct form-check-input" id="Checkproduct" checked>
              <label class="form-check-label" for="Checkproduct">สินค้า</label>
            </div>
          </div>
          <div class="col-7 col-sm-4 col-md-4 col-lg-5 col-xl-5 bk_hide text-left">
            <span>ชื่อหนังสือ</span>
          </div>
          <div class="col-2 bk_hide">
            <span>จำนวน</span>
          </div>
          <div class="col-2 bk_hide">
            <span>รวม</span>
          </div>
          <div class="col-1 bk_hide">
            <span>ลบออก</span>
          </div>
        </div>
        <?php if ($rowbasket > 0){
        while($basket = mysqli_fetch_array($rbasket)){
          $basket_bookprice = $basket["BookPrice"];
          $sum_bookprice = $basket_bookprice * $basket["BookAmount"];
        ?>
        <div class = "row mt-4 text-center align-items-center class_bg_basket">
          <div class = "col-5 col-sm-5 col-md-3 col-lg-2 col-xl-2">
            <table>
              <tr>
                <td>
                <form action="../home/address.php" method="POST">
                  <div class="form-check">
                    <input type="checkbox" class="Checkproduct form-check-input" name="cbproduct[]" id="idcbproduct[<?php echo $basket["BasketNumber"]; ?>]" value="<?php echo $basket["BasketNumber"]; ?>" checked>
                    <label class="form-check-label" for="idcbproduct[<?php echo $basket["BasketNumber"]; ?>]"></label>
                  </div>
                </td>
                <td>
                  <a href="../product/product.php?BookISBN=<?php echo $basket["BookISBN"];?>">
                  <img class="basketimg" src="../img/img_bookall/fullimg/<?php echo $basket["BookISBN"];?>.jpg">
                  </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-7 col-sm-7 col-md-4 col-lg-5 col-xl-5 text-left">
            <label for="idcbproduct[<?php echo $basket["BasketNumber"]; ?>]"><strong><?php echo $basket["BookName"];?></strong></label><br>
            <!-- <span><strong>ผู้เขียน : &nbsp&nbsp</strong><?php echo $basket["BookAuthor"];?></span><br/>
            <span><strong>ผู้แปล : &nbsp&nbsp</strong><?php echo $basket["BookTranslate"];?></span><br/> -->
            <?php
          if(strpos($basket_bookprice,".") !== false){
          ?>
            <span class="align-middle"><strong>ราคา : &nbsp&nbsp</strong><?php echo number_format($basket_bookprice, 2); ?> บาท</span>
          <?php
          } else {
          ?>
            <span class="align-middle"><strong>ราคา : &nbsp&nbsp</strong><?php echo number_format($basket_bookprice); ?> บาท</span>
          <?php } ?>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
          <center>
          <div class="input-group" style="width:120px;">
            <div class="input-group-prepend">
              <a class="minusplus btn btn-outline-secondary btn-minus b_fixborder <?php if($basket["BookAmount"]<=1){ ?>disabled<?php } ?>" id="btnminus" href="../database/kkminusamount.php?bookuser=<?php echo $basket["BasketNumber"]; ?>&bookamount=<?php echo $basket["BookAmount"];?>"><i class="fa fa-minus pt-1" style="display:inline; font-size:14px;"></i></a>
            </div>
            <div class="deleteupdown form-control text-center b_fixborder" name="bsamount" id="BookAmount[<?php echo $basket["BasketNumber"];?>]"><?php echo $basket["BookAmount"];?></div>
            <div class="input-group-append">
              <a class="minusplus btn btn-outline-secondary btn-plus b_fixborder <?php if($basket["BookAmount"]>=15){ ?>disabled<?php } ?>" d="btnplus" href="../database/kkplusamount.php?bookuser=<?php echo $basket["BasketNumber"]; ?>&bookamount=<?php echo $basket["BookAmount"];?>"><i class="fa fa-plus pt-1" style="display:inline; font-size:14px;"></i></a>
            </div>
          </div>
          </center>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
          <?php
          if(strpos($sum_bookprice,".") !== false){
          ?>
            <span class="align-middle"><?php echo number_format($sum_bookprice, 2); ?> บาท</span>
          <?php
          } else {
          ?>
            <span class="align-middle"><?php echo number_format($sum_bookprice); ?> บาท</span>
          <?php } ?>
          </div>
          <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
            <a href="../database/kkdeletebasket.php?BasketNumber=<?php echo $basket["BasketNumber"];?>"><img class="redbin" src="../img/graybin.png" onmouseout="this.src='../img/graybin.png'" onmouseover="this.src='../img/redbin.png'"></a>
          </div>
        </div>
          <?php
        }
        } else { ?>
          <h5 class="text-center mt-4 text-danger">อ๊ะ! ไม่มีสินค้าในตะกร้า</h5>
          <?php } ?>
        <div class="row border-top mt-4">
          <div class="col-12 col-sm-12 col-md-4 col-lg-7 col-xl-7"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 text-right mt-4">
            <p>คูปอง</p>
            <p>ส่วนลด</p>
            <p><strong>ราคาสินค้า</strong></p>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-right mt-4">
              <table width="100%" height="30px" style="margin-bottom:10px;">
                <tr>
                  <td width="70%"><input type="text" id="addcode" class="text-basket form-control" placeholder="ใส่โค้ดส่วนลด"></td>
                  <td width="30%"><a href="basket.php?addcode=" id="btnaddcode" class="btn con-basket bg-success text-white">ยืนยัน</a></td>
                </tr>
              </table>
            <p>&nbsp;</p>
            <strong><p class="text-danger" id="allpricebasket"></p></strong>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-9 col-xl-9"></div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
              <input type="submit" id="btnbasketallprice" class="confirm-basket btn btn-warning" value="ชำระเงิน">
            </from> <!--End from baskettoaddress-->
          </div>
        </div>
        <!--ช่องว่าง ปิด-->
      </div>
      <br><br><br><br><br><br>
      <?php
require ('../style/footer.php');
?>
<!-- <script>
  $(window).on('beforeunload', function(){
  $(window).scrollTop(0);
  });
</script> -->
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
$('#Checkproduct').click(function(event) {  
    if(this.checked) {
        $(':checkbox').each(function() {
            this.checked = true;
            // $('.class_bg_basket').addClass('bggray') 
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;  
            // $('.class_bg_basket').removeClass('bggray')                 
        });
    }
});
</script>
<script language="JavaScript1.2">
  function disableselect(e){
  return false
  }
  function reEnable(){
  return true
  }
  //if IE4+
  document.onselectstart=new Function ("return false")
  //if NS6
  if (window.sidebar){
  document.onmousedown=disableselect
  document.onclick=reEnable
  }
  </script>
<script>
        let link = document.getElementById("btnaddcode");
        link.addEventListener('click', btnaddcode);

        function btnaddcode(event) {

            event.preventDefault();

            let addcode = document.getElementById("addcode");
            let linkVal = link.getAttribute('href');
            linkVal += addcode.value
            window.open(linkVal, '_self');      
}
</script>
<?php
$sum_price_basket = $rbasketsumrow["PriceTotal"];
?>
<script>
  $(document).ready(function() {
    let sumpricebasket = <?php echo $sum_price_basket; ?>+0;
    if(sumpricebasket == 0){

    } else {
      document.getElementById("allpricebasket").innerHTML = new Intl.NumberFormat().format(sumpricebasket)+" บาท";
    }
  });
</script>
</body>
</html>