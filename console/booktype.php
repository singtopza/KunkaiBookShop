<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkofficer.php');

$select_book = "SELECT * FROM books";
$q_book = mysqli_query($connect, $select_book);
$select_ctgr = "SELECT * FROM category";
$q_ctgr = mysqli_query($connect, $select_ctgr);
$q_ctgr_1 = mysqli_query($connect, $select_ctgr);
$select_ctgrID_1 = "SELECT * FROM bookcategory WHERE CategoryID = 1";
$q_ctgrID_1 = mysqli_query($connect, $select_ctgrID_1);
$select_ctgrID_2 = "SELECT * FROM bookcategory WHERE CategoryID = 2";
$q_ctgrID_2 = mysqli_query($connect, $select_ctgrID_2);
$select_ctgrID_3 = "SELECT * FROM bookcategory WHERE CategoryID = 3";
$q_ctgrID_3 = mysqli_query($connect, $select_ctgrID_3);

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
  <script src="../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <div class="container mt-5">
          <h3 class="text-center mb-5">จัดการสินค้าสำหรับนำเสนอ</h3>
            <form class="form-inline" action="../database/kkaddcategorybook.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="booktype_bookisbn" placeholder="ระบุรหัสสินค้า">
                <select class="form-control ml-2" type="text" name="booktype_ctgrid">
                <?php while($r_ctgr = mysqli_fetch_assoc($q_ctgr)){?>
                  <option value="<?php echo $r_ctgr["CategoryID"]; ?>"><?php echo $r_ctgr["CategoryName"]; ?></option>
                <?php } ?>
                </select>
                <input class="btn btn-primary ml-2 px-3" type="submit" value="เพิ่ม">
              </div>
            </form>
            <form class="form-inline" action="../database/kkdelcategorybook.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="booktype_bookisbn" placeholder="ระบุรหัสสินค้า">
                <select class="form-control ml-2" type="text" name="booktype_ctgrid">
                <?php while($r_ctgr_1 = mysqli_fetch_assoc($q_ctgr_1)){?>
                  <option value="<?php echo $r_ctgr_1["CategoryID"]; ?>"><?php echo $r_ctgr_1["CategoryName"]; ?></option>
                <?php } ?>
                </select>
                <input class="btn btn-danger ml-2 px-3" type="submit" value="ลบ">
              </div>
            </form>
          <div class="row border pb-3 text-center">
            <div class="col-4"><p class="border-bottom font-weight-bold py-2">สินค้าแนะนำ</p>
              <div class="row">
                <div class="col-3 font-weight-bold pb-2"><span>ลำดับ</span></div>
                <div class="col-9 font-weight-bold border-left pb-2"><span>รหัสสินค้า</span></div>
                <?php $number_1 = 1;
                while($r_ctgrID_1 = mysqli_fetch_assoc($q_ctgrID_1)){ ?>
                <div class="col-3"><span><?php echo $number_1++; ?></span></div>
                <div class="col-9 border-left"><a href="../product/productadmin.php?BookISBN=<?php echo $r_ctgrID_1["BookISBN"]; ?>"><span><?php echo $r_ctgrID_1["BookISBN"]; ?></span></a></div>
                <?php } ?>
              </div>
            </div>
            <div class="col-4 border-left border-right"><p class="border-bottom font-weight-bold py-2">สินค้าใหม่</p>
              <div class="row">
                <div class="col-3 font-weight-bold pb-2"><span>ลำดับ</span></div>
                <div class="col-9 font-weight-bold border-left pb-2"><span>รหัสสินค้า</span></div>
                <?php $number_2 = 1;
                while($r_ctgrID_2 = mysqli_fetch_assoc($q_ctgrID_2)){ ?>
                <div class="col-3"><span><?php echo $number_2++; ?></span></div>
                <div class="col-9 border-left"><a href="../product/productadmin.php?BookISBN=<?php echo $r_ctgrID_2["BookISBN"]; ?>"><span><?php echo $r_ctgrID_2["BookISBN"]; ?></span></a></div>
                <?php } ?>
              </div>
            </div>
            <div class="col-4"><p class="border-bottom font-weight-bold py-2">สินค้าขายดี</p>
              <div class="row">
                <div class="col-3 font-weight-bold pb-2"><span>ลำดับ</span></div>
                <div class="col-9 font-weight-bold border-left pb-2"><span>รหัสสินค้า</span></div>
                <?php $number_3 = 1;
                while($r_ctgrID_3 = mysqli_fetch_assoc($q_ctgrID_3)){ ?>
                <div class="col-3"><span><?php echo $number_3++; ?></span></div>
                <div class="col-9 border-left"><a href="../product/productadmin.php?BookISBN=<?php echo $r_ctgrID_3["BookISBN"]; ?>"><span><?php echo $r_ctgrID_3["BookISBN"]; ?></span></a></div>
                <?php } ?>
              </div>
            </div>
          </div>
          <br><span class="font-weight-bold">รายการหนังสือทั้งหมด</span><br>
          <?php while($r_book = mysqli_fetch_assoc($q_book)) { ?>
          <span><?php echo $r_book["BookISBN"]; ?></span><br>
          <?php } ?>
          </div>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
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
</body>
</html>