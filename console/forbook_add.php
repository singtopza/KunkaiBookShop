<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkofficer.php');
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
  .form-control.fixregtext2{
    width: 100%;
  }
  .form-control.fixregsex{
    width: 100%;
  }
  #btnnewreg {
    width: 30%;
  }
  .custom-file-label,
  .custom-file-label::after {
    height: initial;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    padding-top: 15px;
    content: "เพิ่มไฟล์";
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
<div class="container-fluid">
<!--ช่องว่าง เปิด-->
<a href="../console/forbook.php"><button class="btn btn-info text-center mt-3"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;จัดการหนังสือ</button></a>
<h3 class="text-center mb-5">เพิ่มหนังสือ</h3>
<form id="registerform" action="../database/kkaddbooks.php" method="POST" enctype="multipart/form-data">
              <div class="row mb-5">
              <div class="col-sm-2"></div>
                <div class="col-sm-4">
                  <input type="text" class="form-control fixregtext2" name="BookISBN" placeholder="ระบุรหัสหนังสือ" required>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimg" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black">ภาพหน้าปก</label>
                  <input class="custom-file-input" type="file" name="addimg" id="addimg" accept="image/jpeg"><br>
                  </div>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgview" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black">ภาพแสดง</label>
                  <input class="custom-file-input" type="file" name="addimgview" id="addimgview" accept="image/png"><br>
                  </div>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgone" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black">ภาพตัวอย่างแรก</label>
                  <input class="custom-file-input" type="file" name="addimgone" id="addimgone" accept="image/jpeg"><br>
                  </div>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgtwo" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black">ภาพตัวอย่างสอง</label>
                  <input class="custom-file-input" type="file" name="addimgtwo" id="addimgtwo" accept="image/jpeg"><br>
                  </div>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgthree" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black">ภาพตัวอย่างสาม</label>
                  <input class="custom-file-input" type="file" name="addimgthree" id="addimgthree" accept="image/jpeg"><br>
                  </div>
                  <input type="text" class="form-control fixregtext2" name="BookName" placeholder="ระบุชื่อหนังสือ (ไทย)" required>
                  <input type="text" class="form-control fixregtext2" name="BookStar" placeholder="ระบุดาว 2,3,4,5" required>
                  <input type="text" class="form-control fixregtext2" name="BookSell" placeholder="ระบุยอดหนังสือที่ขายแล้ว" required>
                  <input type="text" class="form-control fixregtext2" name="BookPrice" placeholder="ระบุราคา (ที่ขายปัจจุบัน)">
                  <input type="text" class="form-control fixregtext2" name="BookFullPrice" placeholder="ระบุราคาเต็ม (ก่อนลดราคา)">
                  <input type="text" class="form-control fixregtext2" name="BookAuthor" placeholder="ระบุชื่อผู้เขียน (ไทย)" required>
                  <input type="text" class="form-control fixregtext2" name="BookTranslate" placeholder="ระบุชื่อผู้แปลภาษา" required>
                  <input type="text" class="form-control fixregtext2" name="BookStock" placeholder="ระบุจำนวนสินค้าคงเหลือ (สุ่ม)" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control fixregtext2" name="BookCover" placeholder="ระบุปกกระดาษ (ปกอ่อน,ปกแข็ง)" required>
                  <input type="text" class="form-control fixregtext2" name="BookPage" placeholder="ระบุจำนวนหน้า" required>
                  <input type="text" class="form-control fixregtext2" name="BookSizeW" placeholder="ระบุความกว้าง" required>
                  <input type="text" class="form-control fixregtext2" name="BookSizeL" placeholder="ระบุความยาว" required>
                  <input type="text" class="form-control fixregtext2" name="BookSizeH" placeholder="ระบุความสูง" required>
                  <input type="text" class="form-control fixregtext2" name="BookWeight" placeholder="ระบุน้ำหนักหนังสือ" required>
                  <input type="text" class="form-control fixregtext2" name="BookColor" placeholder="ระบุชนิดสี (2 สี, สีขาวดำ, สีน้ำมัน ฯลฯ)" required>
                  <input type="text" class="form-control fixregtext2" name="BookPaper" placeholder="ระบุชนิดกระดาษ (กระดาษถนอมสายตา,กระดาษทั่วไป)" required>
                  <input type="text" class="form-control fixregtext2" name="BookInstitution" placeholder="ระบุชื่อสำนักพิมพ์ (ไทย)" required>
                  <input type="text" class="form-control fixregtext2" name="BookYear" placeholder="ระบุปีที่พิมพ์" required>
                  <input type="text" class="form-control fixregtext2" name="BookOriginalName" placeholder="ระบุชื่อหนังสือ (อังกฤษ)" required>
                  <input type="text" class="form-control fixregtext2" name="BookOriginalInstitution" placeholder="ระบุชื่อสำนักพิมพ์ (อังกฤษ)" required>
                  <div class="form-group">
                  <select class="form-control fixregsex" type="text" name="BookType">
                  <option value="1">เลือกประเภท (ยังไม่ระบุ)</option>
                  <option value="2">คณิตศาสตร์</option>
                  <option value="3">ภาษาไทย</option>
                  <option value="4">ประวัติศาสตร์</option>
                  <option value="5">อัตชีวประวัติ ชีวประวัติ</option>
                  <option value="6">วิทยาการและเทคโนโลยี</option>
                  <option value="7">วรรณกรรม</option>
                  <option value="8">การบริหาร</option>
                  <option value="9">การพัฒนาตนเอง</option>
                  <option value="10">การ์ตูน</option>
                  <option value="11">การท่องเที่ยว</option>
                  <option value="12">อาหารและสุขภาพ</option>
                  <option value="13">การเกษตรและธรรมชาติ</option>
                  <option value="14">ครอบครัว</option>
                  </select>
                  </div>
                  <textarea class="form-control fixregtextarea" type="text" rows="4" cols="60" name="BookScript" placeholder="ระบุเนื้อหาโดยย่อ" required></textarea>
                </div>
                <div class="col-sm-2"></div>
              </div>
              <center><button class="btn mb-5 py-5" type="button" id="btnnewreg" data-toggle="modal" data-target="#submitreg">บันทึกข้อมูล</button></center>
            <div id="submitreg" class="modal fade">
              <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                  <div class="modal-header flex-column">	
                    <img src="../img/Logo.gif" width="30%" height="30%" style="display: block; margin-left: auto; margin-right: auto;">			
                    <h4 class="modal-title w-100">ยืนยันการบันทึก</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>โปรดตรวจสอบความถูกต้องให้ครบถ้วน ?</p>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary" id="fixhover">ยืนยัน</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                  </div>
                </div>
              </div>
            </div>   
          </form>
          <div>
<!--ช่องว่าง ปิด-->
</div>
</body>
</html>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
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