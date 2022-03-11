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
  $search = $_POST["search"];
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
<?php require ("../style/header_search.php"); ?>
      <div class="container">
      <h4 class="mt-4 mb-4">ผลลัพธ์การค้นหา...</h4>
<?php
if($search == null) {
  ?>
    <div class="text-danger my-4 py-4 text-center fs20" style="text-shadow: 0 0 1px #FF896F , 0 0 3px #FF896F;">ไม่พบหนังสือที่คุณค้นหา</div>
  <?php
  } else {
    $sqlsearch = "SELECT * FROM books WHERE BookISBN LIKE '%$search%' OR BookName LIKE '%$search%' OR BookAuthor LIKE '%$search%' OR BookTranslate LIKE '%$search%' OR BookInstitution LIKE '%$search%' OR BookOriginalName LIKE '%$search%' OR BookOriginalInstitution LIKE '%$search%'";
    $resultsearch = mysqli_query($connect,$sqlsearch);
    $numrowrssearch = mysqli_num_rows($resultsearch);
    if ($numrowrssearch>0){
?>
  <div class="row">
<?php
while($rowsearch = mysqli_fetch_assoc($resultsearch)){
?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
              <a href="../product/product.php?BookISBN=<?php echo $rowsearch["BookISBN"]; ?>">
                <img class="card-img-top" src="../img/img_bookall/viewimg/<?php echo $rowsearch["BookISBN"]; ?>.png" onerror="this.onerror=null; this.src='../img/imgerror/bookimgsearcherr.png'">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../product/product.php?BookISBN=<?php echo $rowsearch["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $rowsearch["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $rowsearch["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="../database/kkaddbasket.php?BookISBN=<?php echo $rowsearch["BookISBN"]; ?>&BookAmount=1"><img class="clickadd" src="../img/basket-re1.png" width="40" height="40"></a></td>
                        </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($rowsearch["BookSell"]); ?> เล่ม</td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
<?php } ?>
        </div> <!--end row-->
        <?php
        } else {
        ?>
          <div class="text-danger my-4 py-4 text-center fs20" style="text-shadow: 0 0 1px #FF896F , 0 0 3px #FF896F;">ไม่พบหนังสือที่คุณค้นหา</div>
        <?php
        }
        }
        ?>
      </div> <!--END Con-->
<?php } else { ?>
  <body onload="start()">
<script>
function start(){
}
</script>
<?php require ("../style/header_login_search.php"); ?>
      <div class="container">
      <h4 class="mt-4 mb-4">ผลลัพธ์การค้นหา...</h4>
      <?php
if($search == null) {
  ?>
    <div class="text-danger my-4 py-4 text-center fs20" style="text-shadow: 0 0 1px #FF896F , 0 0 3px #FF896F;">ไม่พบหนังสือที่คุณค้นหา</div>
  <?php
  } else {
    $sqlsearch = "SELECT * FROM books WHERE BookISBN LIKE '%$search%' OR BookName LIKE '%$search%' OR BookAuthor LIKE '%$search%' OR BookTranslate LIKE '%$search%' OR BookInstitution LIKE '%$search%' OR BookOriginalName LIKE '%$search%' OR BookOriginalInstitution LIKE '%$search%'";
    $resultsearch = mysqli_query($connect,$sqlsearch);
    $numrowrssearch = mysqli_num_rows($resultsearch);
    if ($numrowrssearch>0){
?>
  <div class="row">
<?php
while($rowsearch = mysqli_fetch_assoc($resultsearch)){
?>
          <div class="col-6 col-md-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 100%; height: 100%;">
            <a href="../product/product.php?BookISBN=<?php echo $rowsearch["BookISBN"]; ?>" style="text-decoration: none;">
                <img class="card-img-top" src="../img/img_bookall/viewimg/<?php echo $rowsearch["BookISBN"]; ?>.png" onerror="this.onerror=null; this.src='../img/imgerror/bookimgsearcherr.png'">
              </a>
                  <div class="card-body">
                      <table>
                        <tr>
                          <td valign="top" rowspan="2" class="card-title" height="70px"><a href="../product/product.php?BookISBN=<?php echo $rowsearch["BookISBN"]; ?>" style="text-decoration: none;"><font color="#000000"><strong><?php echo $rowsearch["BookName"]; ?></strong></font></a></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="card-text">฿<strong><?php echo $rowsearch["BookPrice"]; ?></strong></td>
                          <td rowspan="2" class="basketright"><a href="../home/login.php"><img class="clickadd" src="../img/basket-re1.png" width="40" height="40"></a></td>
                          </tr>
                        <tr>
                            <td class="card-textcut">ขายแล้ว <?php echo number_format($rowsearch["BookSell"]); ?> เล่ม</td>
                          <td></td>
                        </tr>
                      </table>
                  </div>
                </div>
          </div>
          <?php } ?>
        </div> <!--end row-->
        <?php
        } else {
        ?>
          <div class="text-danger my-4 py-4 text-center fs20" style="text-shadow: 0 0 1px #FF896F , 0 0 3px #FF896F;">ไม่พบหนังสือที่คุณค้นหา</div>
        <?php
        }
        }
        ?>
      </div> <!--END Con-->
<?php
}
?>
      <?php
require ('../style/footer.php');
?>
<script language="JavaScript1.2">
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
  </script>
</body>
</html>