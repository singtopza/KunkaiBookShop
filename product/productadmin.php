<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkofficer.php');
require ('../php/getbookisbn.php');
$errproductimg1 = $product["BookImg1"];
$errproductimg2 = $product["BookImg2"];
$errproductimg3 = $product["BookImg3"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/console.css">
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
body {
    background-image: url("../img/intro-bg.jpg");
    width: 100%;
    height: 100vh;
    position: relative;
    background: #f5f8fd url(../img/intro-bg.jpg) center top no-repeat;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<span id="time_now_set" style="display:none;"></span>
<span id="timehr" style="display:none;"></span>
<span id="timem" style="display:none;"></span>
<span id="times" style="display:none;"></span>
<?php require("../style/officer_style.php"); ?>
            <div class="container">
            <!--ช่องว่าง เปิด-->
            <a href="../console/forbook.php"><button class="btn btn-info text-center mt-3"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;จัดการหนังสือ</button></a>
            <a href="../console/forbook_edit.php?BookISBN=<?php echo $product["BookISBN"];?>"><button class="btn btn-info text-center mt-3">แก้ไขข้อมูล</button></a>
            <div class="row mt-3">
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
                <div class="col-12 col-sm-8">
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
                  <div class="pt-1 mb-4">
                  <?php if($product_BookStock > 0){ ?>
                    <span>มีสินค้าทั้งหมด <?php echo $product_BookStock;?> เล่ม</span>
                  <?php } else { ?>
                    <span>สินค้าในคลังว่างเปล่า</span>
                  <?php } ?>
                  </div>
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
              </div>
            <!--ช่องว่าง ปิด-->
          </div>
    <script>
      $(window).on('beforeunload', function(){
      $(window).scrollTop(0);
      });
    </script>
</body>
</html>
<script>
  $(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
        return false;
    }
    });
    $(document).on("contextmenu", function (e) {        
        e.preventDefault();
    });
</script>