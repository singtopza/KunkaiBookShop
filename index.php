<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="img/Logo.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/allpage.js"></script>
  </head>
<?php
require ('database/dbconnect.php');
require ('php/allbook.php');
if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
  $UserID = $_SESSION['UserID'];
  $FirstName = $_SESSION['FirstName'];
  $LastName = $_SESSION['LastName'];
  $UStatus = $_SESSION['UStatus'];
require ('php/checkuser_index.php'); // ตัวแยกพิเศษ อีกตัวชื่อ checkuser.php
require ('php/imgprofile.php');
require ('php/badgeitem.php');
?>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<!-- <span id="timem" class="text-danger"></span>:<span id="times" class="text-danger"></span> -->
<?php require ("style/header_index.php"); ?>
      <div class="container mb-5">
              <div id="carouselbannerkk" class="carousel slide" data-interval="4000" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="0" class="active"></li>
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="1"></li>
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="home/promotions/promotion1.php">
                    <img class="d-block w-100" src="img/probanner/sl01.jpg"  alt="">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="home/promotions/promotion2.php">
                    <img class="d-block w-100" src="img/probanner/sl02.jpg"  alt="">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="home/promotions/promotion3.php">
                    <img class="d-block w-100" src="img/probanner/sl03.png"  alt="">
                    </a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselbannerkk" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon carouseledit" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselbannerkk" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        <div class="row">
          <div class="col-8" style="margin-top: 15px;">
          <p class="homegoods">หนังสือแนะนำ</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 19px;">
            <p class="seemore"><a href="pagegoods/recommend.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_recommend = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 1 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_recommend_q = mysqli_query($connect,$sql_book_recommend);
          $num_book_recommend = mysqli_num_rows($book_recommend_q);
          if($num_book_recommend>=1){
          while($row_book_recommend = mysqli_fetch_assoc($book_recommend_q)){
        ?>
          <!-- class="col-12 col-sm-6 col-md-3" -->
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_recommend["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_recommend["BookISBN"]; ?>.png" alt="<?php echo $row_book_recommend["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_recommend["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_recommend["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_recommend["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="database/kkaddbasket.php?BookISBN=<?php echo $row_book_recommend["BookISBN"]; ?>&BookAmount=1"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_recommend["BookSell"]); ?> เล่ม</td>
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
        <div class="row">
          <div class="col-8">
          <p class="homegoods">หนังสือใหม่</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 4px;">
            <p class="seemore"><a href="pagegoods/newbook.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_newbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 2 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_newbook_q = mysqli_query($connect,$sql_book_newbook);
          $num_book_newbook = mysqli_num_rows($book_newbook_q);
          if($num_book_newbook>=1){
          while($row_book_newbook = mysqli_fetch_assoc($book_newbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_newbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_newbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_newbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_newbook["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="database/kkaddbasket.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>&BookAmount=1"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
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
        <div class="row">
          <div class="col-8">
          <p class="homegoods">หนังสือขายดี</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 4px;">
            <p class="seemore"><a href="pagegoods/hotbook.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_hotbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 3 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_hotbook_q = mysqli_query($connect,$sql_book_hotbook);
          $num_book_hotbook = mysqli_num_rows($book_hotbook_q);
          if($num_book_hotbook>=1){
          while($row_book_hotbook = mysqli_fetch_assoc($book_hotbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_hotbook["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_hotbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_hotbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_hotbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_hotbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_hotbook["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="database/kkaddbasket.php?BookISBN=<?php echo $row_book_hotbook["BookISBN"]; ?>&BookAmount=1"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_hotbook["BookSell"]); ?> เล่ม</td>
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
      </div> <!--END Con-->
<?php } else { ?>
<body>
<?php require ("style/header_login_index.php"); ?>
      <div class="container mb-5">
              <div id="carouselbannerkk" class="carousel slide" data-interval="4000" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="0" class="active"></li>
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="1"></li>
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="home/promotions/promotion1.html">
                    <img class="d-block w-100" src="img/probanner/sl01.jpg"  alt="">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="home/promotions/promotion2.html">
                    <img class="d-block w-100" src="img/probanner/sl02.jpg"  alt="">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="home/promotions/promotion3.html">
                    <img class="d-block w-100" src="img/probanner/sl03.png"  alt="">
                    </a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselbannerkk" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon carouseledit" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselbannerkk" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        <div class="row">
          <div class="col-8" style="margin-top: 15px;">
          <p class="homegoods">หนังสือแนะนำ</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 19px;">
            <p class="seemore"><a href="pagegoods/recommend.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_recommend = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 1 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_recommend_q = mysqli_query($connect,$sql_book_recommend);
          $num_book_recommend = mysqli_num_rows($book_recommend_q);
          if($num_book_recommend>=1){
          while($row_book_recommend = mysqli_fetch_assoc($book_recommend_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_recommend["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_recommend["BookISBN"]; ?>.png" alt="<?php echo $row_book_recommend["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_recommend["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_recommend["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_recommend["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="home/login.php"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_recommend["BookSell"]); ?> เล่ม</td>
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
        <div class="row">
          <div class="col-8">
          <p class="homegoods">หนังสือใหม่</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 4px;">
            <p class="seemore"><a href="pagegoods/newbook.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_newbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 2 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_newbook_q = mysqli_query($connect,$sql_book_newbook);
          $num_book_newbook = mysqli_num_rows($book_newbook_q);
          if($num_book_newbook>=1){
          while($row_book_newbook = mysqli_fetch_assoc($book_newbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_newbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_newbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_newbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_newbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_newbook["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="home/login.php"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
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
        <div class="row">
          <div class="col-8">
          <p class="homegoods">หนังสือขายดี</p>
          </div>
          <div class="col-4 text-right" style="margin-top: 4px;">
            <p class="seemore"><a href="pagegoods/hotbook.php" style="text-decoration: none;"><font color="#0963FF">ดูเพิ่มเติม</font></a></p>
          </div>
        </div>
        <div class="row">
        <?php
          $sql_book_hotbook = "SELECT * FROM bookcategory INNER JOIN books ON bookcategory.BookISBN = books.BookISBN WHERE bookcategory.CategoryID = 3 ORDER BY BookCategoryID DESC LIMIT 4";
          $book_hotbook_q = mysqli_query($connect,$sql_book_hotbook);
          $num_book_hotbook = mysqli_num_rows($book_hotbook_q);
          if($num_book_hotbook>=1){
          while($row_book_hotbook = mysqli_fetch_assoc($book_hotbook_q)){
        ?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="product/product.php?BookISBN=<?php echo $row_book_hotbook["BookISBN"]; ?>">
                <img class="card-img-top" src="img/img_bookall/viewimg/<?php echo $row_book_hotbook["BookISBN"]; ?>.png" alt="<?php echo $row_book_hotbook["BookName"]; ?>">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="product/product.php?BookISBN=<?php echo $row_book_hotbook["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $row_book_hotbook["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $row_book_hotbook["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="home/login.php"><img class="clickadd" src="img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($row_book_hotbook["BookSell"]); ?> เล่ม</td>
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
      </div> <!--END Con-->
<?php } ?>
<?php
require ('style/footer_index.php');
?>
<!-- <script language="JavaScript1.2">
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
  </script> -->
<!-- <script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script> -->
</body>
</html>