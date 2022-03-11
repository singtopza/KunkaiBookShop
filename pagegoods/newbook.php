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
  <script src="../js/allpage.js"></script>
</head>
<?php
require ('../database/dbconnect.php');
require ('../php/allbook.php');
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
<?php require ("../style/header_login.php"); ?>
      <div class="container">
        <p class="homegoods" style="margin-top: 15px;">หนังสือใหม่</p>
        <div class="row">
        <?php
          $sql_book_newbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 3 ORDER BY BookCategoryID DESC";
          $book_newbook_q = mysqli_query($connect,$sql_book_newbook);
          $num_book_newbook = mysqli_num_rows($book_newbook_q);
          if($num_book_newbook>=1){
          while($row_book_newbook = mysqli_fetch_assoc($book_newbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="../product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>">
                <img class="card-img-top" src="../img/img_bookall/viewimg/<?php echo $row_book_newbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_newbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_newbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text"><strong><?php echo $row_book_newbook["BookPrice"]; ?> บาท</strong></td>
                          <td rowspan="2" class="basketright"><a href="../database/kkaddbasket.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>&BookAmount=1"><img class="clickadd" src="../img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_newbook["BookSell"]); ?> เล่ม</td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <?php
            }
          } else {
          ?>
            <div class="col-12 alert alert-danger text-danger text-center" role="alert">ไม่พบข้อมูล</div>
          <?php
          }
           ?>
        </div> <!--end row-->
        <br><br>
      </div>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
  $('.clickadd').on('click', function () {
          var cart = $('.flytobasket');
          var imgtodrag = $('.card-img-top').eq(0);
          if (imgtodrag) {
              var imgclone = imgtodrag.clone()
                  .offset({
                  top: imgtodrag.offset().top,
                  left: imgtodrag.offset().left
              })
                  .css({
                  'opacity': '1',
                      'position': 'absolute',
                      'height': '250px',
                      'width': '250px',
                      'z-index': '100'
              })
                  .appendTo($('body'))
                  .animate({
                  'top': cart.offset().top + 10,
                      'left': cart.offset().left + 10,
                      'width': 75,
                      'height': 75
              }, 1000, 'easeInOutExpo');
              
              setTimeout(function () {
                  cart.effect("shake", {
                      times: 1
                  }, 200);
              }, 1500);
              imgclone.animate({
                  'width': 0,
                  'height': 0
              }, function () {
                  $(this).detach()
              });
          }
      });
    </script>
<?php } else { ?>
  <body>
  <?php require ("../style/header_login.php"); ?>
      <div class="container">
                <p class="homegoods" style="margin-top: 15px;">หนังสือใหม่</p>
                <div class="row">
        <?php
          $sql_book_newbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 2 ORDER BY BookCategoryID DESC";
          $book_newbook_q = mysqli_query($connect,$sql_book_newbook);
          $num_book_newbook = mysqli_num_rows($book_newbook_q);
          if($num_book_newbook>=1){
          while($row_book_newbook = mysqli_fetch_assoc($book_newbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="../product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>">
                <img class="card-img-top" src="../img/img_bookall/viewimg/<?php echo $row_book_newbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_newbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_newbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                        <td class="card-text">฿<strong><?php echo $row_book_newbook["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="../home/login.php"><img class="clickadd" src="../img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_newbook["BookSell"]); ?> เล่ม</td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <?php
            }
          } else {
          ?>
            <div class="col-12 alert alert-danger text-danger text-center" role="alert">ไม่พบข้อมูล</div>
          <?php
          }
           ?>
        </div> <!--end row-->
      </div>
<?php } ?>
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