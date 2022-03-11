<?php session_start(); ?>
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
</head>
<?php
require ('../database/dbconnect.php');
require ('../php/getbookisbn.php');
$errproductimg1 = $product["BookImg1"];
$errproductimg2 = $product["BookImg2"];
$errproductimg3 = $product["BookImg3"];
if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');
?>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
            <div class="row mt-5">
                <div class="col-12 col-sm-3 mb-4 text-center">
                <!--Open modal-->
                <div class="mb-3">
                  <div class="modal fade bd-example-modal show" id="ModelImgOpen" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">ภาพหน้าปก</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-center" id="ModelImgOpen">
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookISBN"];?>.jpg" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div> 
                <a href="#ModelImgOpen" role="button" data-toggle="modal">
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookISBN"];?>.jpg" width="250px" height="350px"></a>
              </div>
                <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen01" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">ภาพตัวอย่าง 1</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg1==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg1"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen01" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg1==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg1"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen02" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">ภาพตัวอย่าง 2</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg2==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg2"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen02" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg2==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg2"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen03" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="shares">ภาพตัวอย่าง 3</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg3==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg3"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen03" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg3==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg3"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                </div>
                <div class="col-12 col-sm-7">
                <h5><?php echo $product["BookName"];?></h5>
                <div class="row">
                  <div class="col-4 col-sm-2"><img src="../img/star/<?php echo $product["BookStar"];?>.png" width="100px" height="20px">
                  </div>
                  <div class="col-8 col-sm-3 pt-1">
                    <span class="pointis align-middle">ได้รับ <?php echo $product["BookStar"];?> คะแนน</span>
                  </div>
                  <div class="col-12 col-sm-7 pt-1">
                    <span class="saleis align-middle">ขายแล้ว <?php echo $product_BookSell;?> เล่ม</span>
                  </div>
                </div>
                <span class="pricered font-weight-bold align-middle">฿<?php echo $product["BookPrice"];?></span>
                <?php 
                if($product["BookPrice"]!=$product["BookFullPrice"]){
                ?>
                  <p class="pricecut">จากปกติ <del>฿<?php echo $product["BookFullPrice"];?></del> บาท</p>
                <?php
                } else {
                ?>
                  <p class="pricecut"></p>
                <?php
                }
                ?>
                <p class="font-weight-bold">ผู้เขียน : <?php echo $product["BookAuthor"];?></p>
                <p class="font-weight-bold">ผู้แปล : <?php echo $product["BookTranslate"];?></p>
                <div class="row mb-2">
                  <div class="col-3 col-sm-2 pt-1">
                    <span class="align-middle">จำนวน : </span>
                  </div>
                  <div class="col-6 col-sm-4">
                    <div class="input-group" style="width:120px;">
                      <div class="input-group-prepend">
                        <button class="minusplus btn btn-outline-secondary btn-minus b_fixborder" <?php if($product_BookStock <= 0){ ?> disabled <?php } ?> ><i class="fa fa-minus" style="display:inline; font-size:14px;"></i></button>
                      </div>
                      <input class="deleteupdown form-control text-center b_fixborder" id="BookAmount" value="1" min="1" max="15" type="number" required <?php if($product_BookStock <= 0){ ?> disabled style="opacity:0.6; background-color:#ffffff;"<?php } ?>>
                      <div class="input-group-append">
                        <button class="minusplus btn btn-outline-secondary btn-plus b_fixborder" <?php if($product_BookStock <= 0){ ?> disabled <?php } ?> ><i class="fa fa-plus" style="display:inline; font-size:14px;"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 col-sm-4 pt-2">
                  <?php if($product_BookStock > 0){ ?>
                    <span>มีสินค้าทั้งหมด <?php echo $product_BookStock;?> เล่ม</span>
                  <?php } else { ?>
                    <span></span>
                  <?php } ?>
                    </div>
                  <div class="col-2 col-sm-1 text-right pt-1">
                    <span class="like-btn"></span>
                  </div>
                  <div class="col-2 col-sm-1 pt-2"> 
                    <img src="../img/shareicon.png" id="share" data-toggle="modal" data-target="#sharesmodal" width="30" height="30">
                  </div>
                    <!-- Modal -->
                    <div class="modal fade" id="sharesmodal" tabindex="-1" role="dialog" aria-labelledby="sharesmodal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">แชร์ไปยัง...</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <a class="btn btn-primary btn-block text-white text-left pl-5" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.kunkaibookshop.lnw.mn.lnw.mn" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Facebook</span>
                              </a>
                              <a class="btn btn-danger btn-block text-white text-left pl-5" href="https://myaccount.google.com/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-google-plus"></i>&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Google plus</span>
                              </a>
                              <a class="btn btn-info btn-block text-white text-left pl-5" href="https://twitter.com/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Twitter</span>
                              </a>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- End Modal -->
                </div>
                <?php if($product_BookStock >= 1){ ?>
                <div class="row">
                  <div class="col-12 col-sm-2"></div>
                  <div class="col-12 col-sm-4 mt-2">
                    <div><a href="../database/kkbasket.php?BookISBN=<?php echo $product["BookISBN"];?>&BookAmount=" id="getbook" class="btn btn-warningfull btn-md btn-block shadow-none">สั่งซื้อ</a></div>
                  </div>
                  <div class="col-12 col-sm-4 mt-2">
                  <div><a href="../database/kkaddbasket.php?BookISBN=<?php echo $product["BookISBN"];?>&BookAmount=" id="addbook" class="btn btn-warningfull2 btn-md btn-block shadow-none">เพิ่มลงตะกล้า</a></div>
                  </div>
                  <div class="col-12 col-sm-2"></div>
                </div>
                <?php } else { ?>
                  <div class="alert alert-danger mx-5 mt-3 text-center" role="alert">สินค้าหมดชั่วคราว</div>
                  <div class="row" style="display:none;">
                  <div class="col-12 col-sm-2"></div>
                  <div class="col-12 col-sm-4 mt-2">
                    <div><a href="../database/kkbasket.php?BookISBN=<?php echo $product["BookISBN"];?>&BookAmount=" id="getbook" class="btn btn-warningfull btn-md btn-block shadow-none">สั่งซื้อ</a></div>
                  </div>
                  <div class="col-12 col-sm-4 mt-2">
                  <div><a href="../database/kkaddbasket.php?BookISBN=<?php echo $product["BookISBN"];?>&BookAmount=" id="addbook" class="btn btn-warningfull2 btn-md btn-block shadow-none">เพิ่มลงตะกล้า</a></div>
                  </div>
                  <div class="col-12 col-sm-2"></div>
                </div>
                <?php } ?>
                <br/>
                <table>
                  <tr>
                    <td class="bggray">
                      <span class="align-middle">เนื้อหาโดยสังเขป</span>
                    </td>
                  </tr>
                  </table>
                  <p class="mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php echo nl2br($product["BookScript"]);?>
                  </p>
                <table>
                  <tr>
                    <td class="bggray">
                      <span class="align-middle">รายละเอียดหนังสือ</span>
                    </td>
                  </tr>
                  </table>
                  <div class="row mt-2">
                    <div class="col-3">
                      <span>ISBN</span>
                    </div>
                    <div class="col-9">
                      <span>: &nbsp;<?php echo $product["BookISBN"];?> (<?php echo $product["BookCover"];?>) <?php echo $product["BookPage"];?> หน้า</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <span>ขนาด</span>
                    </div>
                    <div class="col-9">
                      <span>: &nbsp;<?php echo $product["BookSizeW"];?> x <?php echo $product["BookSizeL"];?> x <?php echo $product["BookSizeH"];?> มม.</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <span>น้ำหนัก</span>
                    </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookWeight"];?> กรัม</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>เนื้อในพิมพ์</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookColor"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>ชนิดกระดาษ</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookPaper"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>สำนักพิมพ์</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookInstitution"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>เดือนปีที่พิมพ์</span>
                  </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookYear"];?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <span>ชื่อเรื่องต้นฉบับ</span>
                </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookOriginalName"];?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <span>สำนักพิมพ์ต้นฉบับ</span>
                </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookOriginalInstitution"];?></span>
                </div>
              </div>
              </div>
                <div class="col-12 col-sm-2 text-center">
                  <p><strong>หนังสือที่คุณอาจสนใจ</strong></p>
                  <?php
                    $productsqle = "SELECT * FROM books WHERE BookISBN = 9786161830342 OR BookISBN = 9786161826567 OR BookISBN = 9786161834043 OR BookISBN = 9786162873829";
                    $rproducte=mysqli_query($connect,$productsqle);
                    while($producte = mysqli_fetch_assoc($rproducte))
                  {
                    ?>
                  <div class="pb-2">
                    <a href="../product/product.php?BookISBN=<?php echo $producte["BookISBN"]; ?>"><img src="../img/img_bookall/fullimg/<?php echo $producte["BookISBN"]; ?>.jpg" width="110" height="150"></a>
                  </div>
                  <div class="fs13 mb-3">
                    <?php echo $producte["BookName"]; ?>
                  </div>
                  <?php } ?>
              </div>
              </div>
            <!--ช่องว่าง ปิด-->
          </div>
<script>
  $(document).ready(function(){
    $('#BookAmount').on('keyup', function () {
      var string_value = document.getElementById('BookAmount').value;
      if(string_value <= <?php echo $product_BookStock;?>){
        if (string_value > 15) {
          document.getElementById("BookAmount").value = 15;
          alert("ไม่สามารถสั่งซื้อสินค้ามากกว่า 15 ชิ้นได้");
        }
        if (string_value < 0) {
          document.getElementById("BookAmount").value = 15;
          alert("ไม่สามารถสั่งซื้อสินค้าน้อยกว่า 1 ชิ้นได้");
        }
      } else {
        document.getElementById("BookAmount").value = <?php echo $product_BookStock;?>;
        alert("สินค้ามีไม่เพียงพอสำหรับการสั่งซื้อครั้งนี้ !");
      }
    });
  });
</script>
<!-- <script>
  $(document).ready(function(){
      var string_value_1 = document.getElementById('BookAmount').value;
      if(string_value_1 <= 1){
        $('.btn-minus').addClass('disabled')
      } else {
        $('.btn-minus').removeClass('disabled')
      }
      if(string_value_1 >= 15){
        $('.btn-plus').addClass('disabled')
      } else {
        $('.btn-plus').removeClass('disabled')
      }
  });
</script> -->
    <script>
      $('.btn-plus, .btn-minus').on('click', function(e) {
        const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        const input = $(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
      });
    </script>
    <script>
      $(window).on('beforeunload', function(){
      $(window).scrollTop(0);
      });
    </script>
    <script type="text/javascript">
      $('.like-btn').on('click', function() {
      $(this).toggleClass('is-active');
      });
    </script>
                  <script>
                          let link = document.getElementById("getbook");
                          link.addEventListener('click', getBook);

                          function getBook(event) {

                              event.preventDefault();

                              let BookAmount = document.getElementById("BookAmount");
                              let linkVal = link.getAttribute('href');
                              linkVal += BookAmount.value 
                              window.open(linkVal, '_self');      
                  }
                  </script>
                  <script>
                          let linkx = document.getElementById("addbook");
                          linkx.addEventListener('click', addBook);

                          function addBook(event) {

                              event.preventDefault();

                              let BookAmount = document.getElementById("BookAmount");
                              let linkValx = linkx.getAttribute('href');
                              linkValx += BookAmount.value
                              window.open(linkValx, '_self');      
                  }
                  </script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      $("#addbook").click(function(){
      $(".flytobasket").shake();
      });
      jQuery.fn.shake = function(intShakes, intDistance, intDuration) { 
        intShakes = intShakes || 2;
        intDistance = intDistance || 10;
        intDuration = intDuration || 300;
      this.each(function() {
      $(this).css("position","relative"); 
        for (var x=1; x<=intShakes; x++) {
      $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
        .animate({left:intDistance}, ((intDuration/intShakes)/2))
        .animate({left:0}, (((intDuration/intShakes)/4)));
      }
      });
      return this;
      };
    </script> -->
<?php
} else {
?>
<body>
<?php require ("../style/header_login.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
            <div class="row mt-5">
                <div class="col-12 col-sm-3 mb-4 text-center">
                <!--Open modal-->
                <div class="mb-3">
                  <div class="modal fade bd-example-modal show" id="ModelImgOpen" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">ภาพหน้าปก</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-center" id="ModelImgOpen">
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookISBN"];?>.jpg" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div> 
                <a href="#ModelImgOpen" role="button" data-toggle="modal">
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookISBN"];?>.jpg" width="250px" height="350px"></a>
              </div>
                <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen01" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">ภาพตัวอย่าง 1</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg1==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg1"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen01" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg1==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg1"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen02" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">ภาพตัวอย่าง 2</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg2==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg2"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen02" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg2==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg2"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                <!--Open modal-->
                <div class="modal fade bd-example-modal show" id="ModelImgOpen03" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="shares">ภาพตัวอย่าง 3</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                      <?php if($errproductimg3==null){ ?>
                          <img src="../img/imgerror/bookimg0203.png" class="img-fluid">
                        <?php } else { ?>
                          <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg3"];?>.jpg" class="img-fluid">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div> 
              <a href="#ModelImgOpen03" style="text-decoration:none;" role="button" data-toggle="modal">
              <?php if($errproductimg3==null){ ?>
                <img src="../img/imgerror/bookimgerror.png" width="80px" height="100px">
              <?php } else { ?>
                <img src="../img/img_bookall/fullimg/<?php echo $product["BookImg3"];?>.jpg" width="80px" height="100px">
              <?php } ?>
            </a>
              <!--End Modal-->
                </div>
                <div class="col-12 col-sm-7">
                <h5><?php echo $product["BookName"];?></h5>
                <div class="row">
                  <div class="col-4 col-sm-2"><img src="../img/star/<?php echo $product["BookStar"];?>.png" width="100px" height="20px">
                  </div>
                  <div class="col-8 col-sm-3 pt-1">
                    <span class="pointis align-middle">ได้รับ <?php echo $product["BookStar"];?> คะแนน</span>
                  </div>
                  <div class="col-12 col-sm-7 pt-1">
                    <span class="saleis align-middle">ขายแล้ว <?php echo $product_BookSell;?> เล่ม</span>
                  </div>
                </div>
                <span class="pricered font-weight-bold align-middle">฿<?php echo $product["BookPrice"];?></span>
                <?php 
                if($product["BookPrice"]!=$product["BookFullPrice"]){
                ?>
                  <p class="pricecut">จากปกติ <del>฿<?php echo $product["BookFullPrice"];?></del> บาท</p>
                <?php
                } else {
                ?>
                  <p class="pricecut"></p>
                <?php
                }
                ?>
                <p class="font-weight-bold">ผู้เขียน : <?php echo $product["BookAuthor"];?></p>
                <p class="font-weight-bold">ผู้แปล : <?php echo $product["BookTranslate"];?></p>
                <div class="row mb-2">
                  <div class="col-3 col-sm-2 pt-1">
                    <span class="align-middle">จำนวน : </span>
                  </div>
                  <div class="col-6 col-sm-4">
                  <div class="input-group" style="width:120px;">
                      <div class="input-group-prepend">
                        <button class="minusplus btn btn-outline-secondary btn-minus b_fixborder" <?php if($product_BookStock <= 0){ ?> disabled <?php } ?> ><i class="fa fa-minus" style="display:inline; font-size:14px;"></i></button>
                      </div>
                      <input class="deleteupdown form-control text-center b_fixborder" id="BookAmount" value="1" min="1" max="15" type="number" required <?php if($product_BookStock <= 0){ ?> disabled style="opacity:0.6; background-color:#ffffff;"<?php } ?>>
                      <div class="input-group-append">
                        <button class="minusplus btn btn-outline-secondary btn-plus b_fixborder" <?php if($product_BookStock <= 0){ ?> disabled <?php } ?> ><i class="fa fa-plus" style="display:inline; font-size:14px;"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 col-sm-4 pt-2">
                  <?php if($product_BookStock > 0){ ?>
                    <span>มีสินค้าทั้งหมด <?php echo $product_BookStock;?> เล่ม</span>
                  <?php } else { ?>
                    <span></span>
                  <?php } ?>
                    </div>
                  <div class="col-2 col-sm-1 text-right pt-1">
                    <span class="like-btn"></span>
                  </div>
                  <div class="col-2 col-sm-1 pt-2"> 
                    <img src="../img/shareicon.png" id="share" data-toggle="modal" data-target="#sharesmodal" width="30" height="30">
                  </div>
                    <!-- Modal -->
                    <div class="modal fade" id="sharesmodal" tabindex="-1" role="dialog" aria-labelledby="sharesmodal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">แชร์ไปยัง...</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <a class="btn btn-primary btn-block text-white text-left pl-5" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.kunkaibookshop.lnw.mn.lnw.mn" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Facebook</span>
                              </a>
                              <a class="btn btn-danger btn-block text-white text-left pl-5" href="https://myaccount.google.com/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-google-plus"></i>&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Google plus</span>
                              </a>
                              <a class="btn btn-info btn-block text-white text-left pl-5" href="https://twitter.com/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Twitter</span>
                              </a>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- End Modal -->
                </div>
                <?php if($product_BookStock >= 1){ ?>
                <div class="row">
                <div class="col-12 col-sm-2"></div>
                  <div class="col-12 col-sm-4 mt-2">
                    <div><a href="../home/login.php" id="getbook" class="btn btn-warningfull btn-md btn-block shadow-none">สั่งซื้อ</a></div>
                  </div>
                  <div class="col-12 col-sm-4 mt-2">
                  <div><a href="../home/login.php" id="addbook" class="btn btn-warningfull2 btn-md btn-block shadow-none">เพิ่มลงตะกล้า</a></div>
                  </div>
                  <div class="col-12 col-sm-2"></div>
                </div>
                <?php } else { ?>
                  <div class="alert alert-danger mx-5 mt-3 text-center" role="alert">สินค้าหมดชั่วคราว</div>
                  <div class="row" style="display:none;">
                <div class="col-12 col-sm-2"></div>
                  <div class="col-12 col-sm-4 mt-2">
                    <div><a href="../home/login.php" id="getbook" class="btn btn-warningfull btn-md btn-block shadow-none">สั่งซื้อ</a></div>
                  </div>
                  <div class="col-12 col-sm-4 mt-2">
                  <div><a href="../home/login.php" id="addbook" class="btn btn-warningfull2 btn-md btn-block shadow-none">เพิ่มลงตะกล้า</a></div>
                  </div>
                  <div class="col-12 col-sm-2"></div>
                </div>
                  <?php } ?>
                <br/>
                <table>
                  <tr>
                    <td class="bggray">
                      <span class="align-middle">เนื้อหาโดยสังเขป</span>
                    </td>
                  </tr>
                  </table>
                  <p class="mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php echo nl2br($product["BookScript"]);?>
                  </p>
                <table>
                  <tr>
                    <td class="bggray">
                      <span class="align-middle">รายละเอียดหนังสือ</span>
                    </td>
                  </tr>
                  </table>
                  <div class="row mt-2">
                    <div class="col-3">
                      <span>ISBN</span>
                    </div>
                    <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookISBN"];?> (<?php echo $product["BookCover"];?>) <?php echo $product["BookPage"];?> หน้า</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <span>ขนาด</span>
                    </div>
                    <div class="col-9">
                      <span>: &nbsp;<?php echo $product["BookSizeW"];?> x <?php echo $product["BookSizeL"];?> x <?php echo $product["BookSizeH"];?> มม.</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <span>น้ำหนัก</span>
                    </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookWeight"];?> กรัม</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>เนื้อในพิมพ์</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookColor"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>ชนิดกระดาษ</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookPaper"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>สำนักพิมพ์</span>
                  </div>
                  <div class="col-9">
                    <span>: &nbsp;<?php echo $product["BookInstitution"];?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>เดือนปีที่พิมพ์</span>
                  </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookYear"];?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <span>ชื่อเรื่องต้นฉบับ</span>
                </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookOriginalName"];?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <span>สำนักพิมพ์ต้นฉบับ</span>
                </div>
                <div class="col-9">
                  <span>: &nbsp;<?php echo $product["BookOriginalInstitution"];?></span>
                </div>
              </div>
              </div>
                <div class="col-12 col-sm-2 text-center">
                  <p><strong>หนังสือที่คุณอาจสนใจ</strong></p>
                  <?php
                    $productsqle = "SELECT * FROM books WHERE BookISBN = 9786161830342 OR BookISBN = 9786161826567 OR BookISBN = 9786161834043 OR BookISBN = 9786162873829";
                    $rproducte=mysqli_query($connect,$productsqle);
                    while($producte = mysqli_fetch_assoc($rproducte))
                  {
                    ?>
                  <div class="pb-2">
                    <a href="../home/login.php"><img src="../img/img_bookall/fullimg/<?php echo $producte["BookISBN"]; ?>.jpg" width="110" height="150"></a>
                  </div>
                  <div class="fs13 mb-3">
                    <?php echo $producte["BookName"]; ?>
                  </div>
                  <?php } ?>
              </div>
              </div>
            <!--ช่องว่าง ปิด-->
          </div>
<script>
  $(document).ready(function(){
    $('#BookAmount').on('keyup', function () {
      var string_value = document.getElementById('BookAmount').value; //.in
      if(string_value <= <?php echo $product_BookStock;?>){
        if (string_value > 15) {
          document.getElementById("BookAmount").value = 15;
          alert("ไม่สามารถสั่งซื้อสินค้ามากกว่า 15 ชิ้นได้");
        }
        if (string_value < 0) {
          document.getElementById("BookAmount").value = 15;
          alert("ไม่สามารถสั่งซื้อสินค้าน้อยกว่า 1 ชิ้นได้");
        }
      } else {
        document.getElementById("BookAmount").value = <?php echo $product_BookStock;?>;
        alert("สินค้ามีไม่เพียงพอสำหรับการสั่งซื้อครั้งนี้ !");
      }
    });
  });
</script>
    <script>
      $('.btn-plus, .btn-minus').on('click', function(e) {
        const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        const input = $(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
      });
    </script>
    <script>
      $(window).on('beforeunload', function(){
      $(window).scrollTop(0);
      });
    </script>
    <script type="text/javascript">
      $('.like-btn').on('click', function() {
      $(this).toggleClass('is-active');
      });
    </script>
<?php
}
?>
<?php
require ('../style/footer.php');
?>
</body>
</html>