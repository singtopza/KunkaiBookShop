<?php
require ('../database/dbconnect.php');
$BookNumber = $_POST["BookNumber"];
$BookISBN = $_POST["BookISBN"];
$BookName = $_POST["BookName"];
$BookStar = $_POST["BookStar"];
$BookSell = $_POST["BookSell"];
$BookPrice = $_POST["BookPrice"];
$BookFullPrice = $_POST["BookFullPrice"];
$BookAuthor = $_POST["BookAuthor"];
$BookTranslate = $_POST["BookTranslate"];
$BookStock = $_POST["BookStock"];
$BookScript = addslashes($_POST["BookScript"]);
$BookCover = $_POST["BookCover"];
$BookPage = $_POST["BookPage"];
$BookSizeW = $_POST["BookSizeW"];
$BookSizeL = $_POST["BookSizeL"];
$BookSizeH = $_POST["BookSizeH"];
$BookWeight = $_POST["BookWeight"];
$BookColor = $_POST["BookColor"];
$BookPaper = $_POST["BookPaper"];
$BookInstitution = $_POST["BookInstitution"];
$BookYear = $_POST["BookYear"];
$BookOriginalName = addslashes($_POST["BookOriginalName"]);
$BookOriginalInstitution = $_POST["BookOriginalInstitution"];
$BookType = $_POST["BookType"];

$productsqlse = "SELECT * FROM books WHERE BookISBN = '$BookISBN'";
$rproductse=mysqli_query($connect,$productsqlse);
$productse = mysqli_fetch_assoc($rproductse);
$BookImg1_g = $productse["BookImg1"];
$BookImg2_g = $productse["BookImg2"];
$BookImg3_g = $productse["BookImg3"];

$BookImg1_f = $_FILES["addimgone"]["name"];
$BookImg2_f = $_FILES["addimgtwo"]["name"];
$BookImg3_f = $_FILES["addimgthree"]["name"];

// echo "G : ".$BookImg1_g." ".$BookImg2_g." ".$BookImg3_g."<br>";
// echo "F : ".$BookImg1_f." ".$BookImg2_f." ".$BookImg3_f."<br><br>";
// echo "\$_FILES[\"addimgone\"][\"name\"] = ".$_FILES["addimgone"]["name"]."<br>";
// echo "\$_FILES[\"addimgone\"][\"type\"] = ".$_FILES["addimgone"]["type"]."<br>";
// echo "\$_FILES[\"addimgone\"][\"size\"] = ".$_FILES["addimgone"]["size"]."<br>";
// echo "\$_FILES[\"addimgone\"][\"tmp_name\"] = ".$_FILES["addimgone"]["tmp_name"]."<br>";
// echo "\$_FILES[\"addimgone\"][\"error\"] = ".$_FILES["addimgone"]["error"]."<br>";

$temp1 = explode(".", $_FILES["addimg"]["name"]);
$newfilename1 = $BookISBN.'.'.end($temp1);
if(move_uploaded_file($_FILES["addimg"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename1))
{
}

$temp2 = explode(".", $_FILES["addimgview"]["name"]);
$newfilename2 = $BookISBN.'.'.end($temp2);
if(move_uploaded_file($_FILES["addimgview"]["tmp_name"],"../img/img_bookall/viewimg/".$newfilename2))
{
}

if($BookImg1_f == null) {
    if($BookImg1_g == null) {
        $BookImg1 = "";
    }
    else {
        $BookImg1 = $_POST["BookISBN"];
        $BookImg1 = $BookImg1."-01";
    }
}
else {
    $temp3 = explode(".", $_FILES["addimgone"]["name"]);
    $newfilename3 = $BookISBN.'-01.'.end($temp3);
    move_uploaded_file($_FILES["addimgone"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename3);
    $BookImg1 = $_POST["BookISBN"];
    $BookImg1 = $BookImg1."-01";
}

if($BookImg2_f == null) {
    if($BookImg2_g == null) {
        $BookImg2 = "";
    }
    else {
        $BookImg2 = $_POST["BookISBN"];
        $BookImg2 = $BookImg2."-02";
    }
}
else {
    $temp4 = explode(".", $_FILES["addimgtwo"]["name"]);
    $newfilename4 = $BookISBN.'-02.'.end($temp4);
    move_uploaded_file($_FILES["addimgtwo"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename4);
    $BookImg2 = $_POST["BookISBN"];
    $BookImg2 = $BookImg2."-02";
}

if($BookImg3_f == null) {
    if($BookImg3_g == null) {
        $BookImg3 = "";
    }
    else {
        $BookImg3 = $_POST["BookISBN"];
        $BookImg3 = $BookImg3."-03";
    }
}
else {
    $temp5 = explode(".", $_FILES["addimgthree"]["name"]);
    $newfilename5 = $BookISBN.'-03.'.end($temp5);
    move_uploaded_file($_FILES["addimgthree"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename5);
    $BookImg3 = $_POST["BookISBN"];
    $BookImg3 = $BookImg3."-03";
}

if($BookFullPrice < $BookPrice){
    $BookFullPrice = $BookPrice;
}
if($BookFullPrice == null){
    $BookFullPrice = $BookPrice;
}
if($BookPrice == null){
    $BookPrice = $BookFullPrice;
}
if($BookFullPrice == null && $BookPrice == null){
    $BookPrice = 0;
    $BookFullPrice = 0;
}

$sql = "UPDATE books SET BookISBN = '$BookISBN', BookImg1 = '$BookImg1', BookImg2 = '$BookImg2', BookImg3 = '$BookImg3', 
BookName = '$BookName', BookStar = '$BookStar', BookSell = '$BookSell', BookPrice = '$BookPrice', BookFullPrice = '$BookFullPrice', 
BookAuthor = '$BookAuthor', BookTranslate = '$BookTranslate', BookStock = '$BookStock', BookScript = '$BookScript', BookCover = '$BookCover', 
BookPage = '$BookPage', BookSizeW = '$BookSizeW', BookSizeL = '$BookSizeL', BookSizeH = '$BookSizeH', BookWeight = '$BookWeight', 
BookColor = '$BookColor', BookPaper = '$BookPaper', BookInstitution = '$BookInstitution', BookYear = '$BookYear', BookOriginalName = '$BookOriginalName', 
BookOriginalInstitution = '$BookOriginalInstitution', BookType = '$BookType' WHERE BookNumber = '$BookNumber'";
$result = mysqli_query($connect,$sql);
if ($result){
    // $message = "แก้ไขข้อมูลหนังสือ $BookISBN แล้ว !";
    // echo "<script>alert('$message');</script>";
    echo ("<script>window.location = '../product/productadmin.php?BookISBN=$BookISBN';</script>");
} else {
    $message = "พบปัญหาในการแก้ไขหนังสือ โปรดตรวจสอบข้อมูลอีกครั้งหรือแจ้งปัญหาได้ที่ \\n คุณศรัณย์ \\n หมายเลขโทรศัพท์ 061-123-0387";
    echo "<script>alert('$message');</script>";
    echo ("<script>window.history.go(-1);</script>");
}
?>