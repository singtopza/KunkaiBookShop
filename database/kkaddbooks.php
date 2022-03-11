<?php
    require ('dbconnect.php');
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
    
    $temp3 = explode(".", $_FILES["addimgone"]["name"]);
    $newfilename3 = $BookISBN.'-01.'.end($temp3);
    if(move_uploaded_file($_FILES["addimgone"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename3))
	{
		$BookImg1 = $_POST["BookISBN"];
        $BookImg1 = $BookImg1."-01";
	} else {
        $BookImg1 = "";
    }

    $temp4 = explode(".", $_FILES["addimgtwo"]["name"]);
    $newfilename4 = $BookISBN.'-02.'.end($temp4);
    if(move_uploaded_file($_FILES["addimgtwo"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename4))
	{
		$BookImg2 = $_POST["BookISBN"];
        $BookImg2 = $BookImg2."-02";
	} else {
        $BookImg2 = "";
    }

    $temp5 = explode(".", $_FILES["addimgthree"]["name"]);
    $newfilename5 = $BookISBN.'-03.'.end($temp5);
    if(move_uploaded_file($_FILES["addimgthree"]["tmp_name"],"../img/img_bookall/fullimg/".$newfilename5))
	{
		$BookImg3 = $_POST["BookISBN"];
        $BookImg3 = $BookImg3."-03";
	} else {
        $BookImg3 = "";
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

    $sql = "INSERT INTO books(BookISBN,BookImg1,BookImg2,BookImg3,BookName,BookStar,BookSell,BookPrice,BookFullPrice,BookAuthor,BookTranslate,BookStock,BookScript,BookCover,BookPage,BookSizeW,BookSizeL,BookSizeH,BookWeight,BookColor,BookPaper,BookInstitution,BookYear,BookOriginalName,BookOriginalInstitution,BookType) VALUE ('$BookISBN','$BookImg1','$BookImg2','$BookImg3','$BookName','$BookStar','$BookSell','$BookPrice','$BookFullPrice','$BookAuthor','$BookTranslate','$BookStock','$BookScript','$BookCover','$BookPage','$BookSizeW','$BookSizeL','$BookSizeH','$BookWeight','$BookColor','$BookPaper','$BookInstitution','$BookYear','$BookOriginalName','$BookOriginalInstitution',$BookType)";
    $result = mysqli_query($connect,$sql);
    if($result){
        $message = "เพิ่มหนังสือหมายเลข $BookISBN สำเร็จแล้ว...";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo ("<script>window.location = '../console/forbook.php';</script>");
    }
    else{
        $errors = "ล้มเหลว โปรดติดต่อ ศรัณย์ เวียงสิมมา เพื่อแก้ไขปัญหาของคุณ";
        echo "<script type='text/javascript'>alert('$errors');</script>";
        echo ("<script>window.location = '../console/forbook.php';</script>");
    }
?>