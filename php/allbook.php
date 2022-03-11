<?php
  $productsql = "SELECT * FROM books";
  $rproduct=mysqli_query($connect,$productsql);
  $product = mysqli_fetch_array($rproduct);
?>