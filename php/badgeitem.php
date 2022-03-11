<?php
  $basketsql = "SELECT * FROM basket WHERE UserID = $UserID";
  $rbasket=mysqli_query($connect,$basketsql);
  $rowbasket = mysqli_num_rows($rbasket);
?>