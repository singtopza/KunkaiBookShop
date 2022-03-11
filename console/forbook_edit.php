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
    width: 100%;
  }
  .custom-file-label,
  .custom-file-label::after {
    height: initial;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    padding-top: 15px;
    content: "เพิ่มไฟล์";
  }
  #btnremoveimg {
    width: 100%;
    font-size: 16px;
    background-color: red;
    color: white;
    padding: 14px 20px;
    border: none;
    outline: none;
    border-radius: 15px;
    cursor: pointer;
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
<h3 class="text-center mb-5">แก้ไขข้อมูลหนังสือ</h3>
<form id="registerform" action="../console/forbook_sql_edit.php" method="POST" enctype="multipart/form-data">
<?php
  $GETBookISBN = $_GET["BookISBN"];
  $sqlsteditbook = "SELECT * FROM books WHERE BookISBN = $GETBookISBN";
  $resultsteditbook = mysqli_query($connect,$sqlsteditbook);
  $row = mysqli_fetch_assoc($resultsteditbook);
?>
              <table class="mb-5">
                <tbody>
                <tr>
                  <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <input type="hidden" class="form-control fixregtext2" name="BookNumber" value="<?php echo $row["BookNumber"]; ?>" placeholder="ระบุเลขหนังสือ">
                    <label class="text-left">ระบุรหัสหนังสือ</label>
                    <input type="text" class="form-control fixregtext2" name="BookISBN" value="<?php echo $row["BookISBN"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ภาพหน้าปก</label>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimg" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black"><?php echo $row["BookISBN"]; ?></label>
                  <input class="custom-file-input" type="file" name="addimg" id="addimg" accept="image/jpeg"><br>
                  </div>
                  </td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ภาพแสดง</label>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgview" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black"><?php echo $row["BookISBN"]; ?></label>
                  <input class="custom-file-input" type="file" name="addimgview" id="addimgview" accept="image/png"><br>
                  </div>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                  <td width="5%"></td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ภาพตัวอย่างแรก</label>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgone" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black"><?php echo $row["BookImg1"]; ?></label>
                  <input class="custom-file-input" type="file" name="addimgone" id="addimgone" accept="image/jpeg"><br>
                  </div>
                  </td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ภาพตัวอย่างสอง</label>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgtwo" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black"><?php echo $row["BookImg2"]; ?></label>
                  <input class="custom-file-input" type="file" name="addimgtwo" id="addimgtwo" accept="image/jpeg"><br>
                  </div>
                  </td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ภาพตัวอย่างสาม</label>
                  <div class="custom-file" style="margin-bottom:43px; width:100%;">
                  <label for="addimgthree" class="custom-file-label" style="border-radius: 15px; padding-top:14px; height:55px; color:black"><?php echo $row["BookImg3"]; ?></label>
                  <input class="custom-file-input" type="file" name="addimgthree" id="addimgthree" accept="image/jpeg"><br>
                  </div>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                <td class="px-3" style="vertical-align: text-top;">
                  <label class="text-left">เลือกประเภทหนังสือ</label>                 
                  <div class="form-group">
                  <select class="form-control fixregsex" type="text" name="BookType" value="<?php echo $row["BookType"]; ?>">
                  <?php require ("../php/booktypecheck.php"); ?>
                  </select>
                  </div>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อหนังสือ (ไทย)</label>
                    <input type="text" class="form-control fixregtext2" name="BookName" value="<?php echo $row["BookName"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุดาว 2,3,4,5</label>
                    <input type="text" class="form-control fixregtext2" name="BookStar" value="<?php echo $row["BookStar"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุยอดหนังสือที่ขายแล้ว</label>
                    <input type="text" class="form-control fixregtext2" name="BookSell" value="<?php echo $row["BookSell"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุราคา (ที่ขายปัจจุบัน)</label>
                    <input type="text" class="form-control fixregtext2" name="BookPrice" value="<?php echo $row["BookPrice"]; ?>">
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุราคาเต็ม (ก่อนลดราคา)</label>
                    <input type="text" class="form-control fixregtext2" name="BookFullPrice" value="<?php echo $row["BookFullPrice"]; ?>">
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อผู้เขียน (ไทย)</label>
                    <input type="text" class="form-control fixregtext2" name="BookAuthor" value="<?php echo $row["BookAuthor"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อผู้แปลภาษา</label>
                    <input type="text" class="form-control fixregtext2" name="BookTranslate" value="<?php echo $row["BookTranslate"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุจำนวนสินค้าคงเหลือ</label>
                    <input type="text" class="form-control fixregtext2" name="BookStock" value="<?php echo $row["BookStock"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุน้ำหนักหนังสือ</label>
                    <input type="text" class="form-control fixregtext2" name="BookWeight" value="<?php echo $row["BookWeight"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุปกกระดาษ (ปกอ่อน,ปกแข็ง)</label>
                    <input type="text" class="form-control fixregtext2" name="BookCover" value="<?php echo $row["BookCover"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุจำนวนหน้า</label>
                    <input type="text" class="form-control fixregtext2" name="BookPage" value="<?php echo $row["BookPage"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุความกว้าง</label>
                    <input type="text" class="form-control fixregtext2" name="BookSizeW" value="<?php echo $row["BookSizeW"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุความยาว</label>
                    <input type="text" class="form-control fixregtext2" name="BookSizeL" value="<?php echo $row["BookSizeL"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุความสูง</label>
                    <input type="text" class="form-control fixregtext2" name="BookSizeH" value="<?php echo $row["BookSizeH"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                  <label class="text-left">ระบุชนิดสี (2 สี, สีขาวดำ, สีน้ำมัน ฯลฯ)</label>
                    <input type="text" class="form-control fixregtext2" name="BookColor" value="<?php echo $row["BookColor"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชนิดกระดาษ (กระดาษถนอมสายตา,กระดาษทั่วไป)</label>
                    <input type="text" class="form-control fixregtext2" name="BookPaper" value="<?php echo $row["BookPaper"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อสำนักพิมพ์ (ไทย)</label>
                    <input type="text" class="form-control fixregtext2" name="BookInstitution" value="<?php echo $row["BookInstitution"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td width="5%"></td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุปีที่พิมพ์</label>
                    <input type="text" class="form-control fixregtext2" name="BookYear" value="<?php echo $row["BookYear"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อหนังสือ (อังกฤษ)</label>
                    <input type="text" class="form-control fixregtext2" name="BookOriginalName" value="<?php echo $row["BookOriginalName"]; ?>" required>
                  </td>
                  <td class="px-3" width="30%" >
                    <label class="text-left">ระบุชื่อสำนักพิมพ์ (อังกฤษ)</label>
                    <input type="text" class="form-control fixregtext2" name="BookOriginalInstitution" value="<?php echo $row["BookOriginalInstitution"]; ?>" required>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                  <td width="5%"></td>
                  <td colspan="3" class="pb-5 px-3"  width="100%">
                    <label class="text-left">ระบุเนื้อหาโดยย่อ</label>
                    <textarea class="form-control fixregtextarea" type="text" rows="4" cols="60" name="BookScript" required><?php echo $row["BookScript"]; ?></textarea>
                  </td>
                  <td>
                  </td>
                  <td width="5%"></td>
                </tr>
                <tr>
                <td></td>
                  <td></td>
                  <td>
                  <button class="btn mb-1 py-5" type="button" id="btnnewreg" data-toggle="modal" data-target="#submitreg">บันทึกข้อมูล</button>
                  <a href="../database/kkdelimgforadmin.php?BookISBN=<?php echo $row["BookISBN"]; ?>"><button class="btn mb-5" type="button" id="btnremoveimg">ลบข้อมูลภาพตัวอย่างทั้งหมด</button></a>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
            </table>
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