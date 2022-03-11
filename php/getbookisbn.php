<?php
  $bookisnb = $_GET["BookISBN"];
  $productsql = "SELECT * FROM books WHERE BookISBN = '$bookisnb'";
  $rproduct=mysqli_query($connect,$productsql);
  $product = mysqli_fetch_assoc($rproduct);
  $errbooktest = $product["BookISBN"];
  $product_BookSell = number_format($product["BookSell"]);
  $product_BookStock = number_format($product["BookStock"]);
  if ($errbooktest == null){
    $errbooktest = "N/A";
  }
  if (!isset($product)){
  echo "<script>alert('ไม่พบข้อมูลหนังสือ $errbooktest ในฐานข้อมูลระบบ');</script>";
  echo ("<script>window.history.go(-1);</script>");
  }
?>