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
  #btnnewreg {
    width: 100%;
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
<div class="container-fluid my-5">
<!--ช่องว่าง เปิด-->
          <div>
          <h3 class="text-center mb-3">หนังสือภายในคลัง</h3>
          <div class="row">
            <div class="col-10"></div>
            <div class="col-2 text-right">
          <a href="../console/forbook_add.php"><button class="btn btn-info text-center"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;เพิ่มหนังสือ</button></a>
            </div>  
        </div>
          <?php
          $sqlstbook = "SELECT * FROM books ORDER BY BookNumber DESC;";
          $resultstbook = mysqli_query($connect,$sqlstbook);
          ?>
            <form class="form-inline">
              <input class="search bg-light" type="search" placeholder="ค้นหาหนังสือ" aria-label="Search" style="margin-left:0px; width:100%;">
            </form>
<table width="100%" style="margin-bottom:250px;" class="tablex">
    <tr class="text-center">
        <th class="borderuser">ภาพสินค้า</th>
        <th class="borderuser">รหัสหนังสือ</th>
        <th class="borderuser">ชื่อหนังสือ</th>
        <th class="borderuser">ราคาขาย / ปกติ</th>
        <th class="borderuser">จำนวนสินค้า</th>
        <th class="borderuser">จำนวนหน้า</th>
        <th class="borderuser">ขนาด W*L*H</th>
        <th class="borderuser">น้ำหนัก</th>
        <th class="borderuser">สำนักพิมพ์</th>
        <th class="borderuser">ดูสินค้า</th>
        <th class="borderuser">แก้ไข</th>
        <th class="borderuser">ลบ</th>
    </tr>
<?php
    while($rstbook = mysqli_fetch_assoc($resultstbook)){
?>
    <tr class="text-center trx">
        <td class="borderusers"><img width="150px" height="150px" src="../img/img_bookall/viewimg/<?php echo $rstbook ["BookISBN"];?>.png" onerror="this.onerror=null; this.src='../img/imgerror/bookimg0203.png'"></td>
        <td class="borderusers"><?php echo $rstbook ["BookISBN"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookName"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookPrice"]." / ".$rstbook ["BookFullPrice"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookStock"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookPage"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookSizeW"]."*".$rstbook ["BookSizeL"]."*".$rstbook ["BookSizeH"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookWeight"];?></td>
        <td class="borderusers"><?php echo $rstbook ["BookInstitution"]." - ".$rstbook ["BookYear"];?></td>
        <td class="borderusers"><a href="../product/productadmin.php?BookISBN=<?php echo $rstbook ["BookISBN"];?>" class="btn btn-primary">ดูสินค้า</a></td>
        <td class="borderusers"><a href="../console/forbook_edit.php?BookISBN=<?php echo $rstbook ["BookISBN"];?>" class="btn btn-info">แก้ไข</a></td>
        <form action="forbook_del_cb.php" method="POST">
        <td class="borderusers"><input type="checkbox" name="BookISBN[]" style="width:70px; height:70px;" value="<?php echo $rstbook ["BookISBN"];?>"></td>
    </tr>
<?php
}
?>
</table>
</div>
<!--ช่องว่าง ปิด-->
<input type="submit" class="btn btn-danger text-white btn-block py-3 fixed-bottom" value="ลบข้อมูล(CB)">
</form>
</div>
</body>
</html>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery.searcher.js"></script>
<script>
  $(".tablex").searcher({
    itemSelector: ".trx",
    textSelector: "td",
    inputSelector: ".search",
    toggle: function(item, containsText) {
      if (containsText)
        $(item).fadeIn();
      else
        $(item).fadeOut();
    }
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