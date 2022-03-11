<?php
require ('../database/dbconnect.php');
$BookISBN = $_POST["BookISBN"];
$BookISBNI = implode(",",$BookISBN);
$sqldel = "DELETE FROM books WHERE BookISBN IN ($BookISBNI)";
$result = mysqli_query($connect,$sqldel);
if($result){
  echo ("<script>window.location = '../console/forbook.php';</script>");
    exit(0);
}
else {
    echo "Error"."<br>";
}
?>