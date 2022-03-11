<?php session_start();  
    require ('dbconnect.php');
    $BookISBN = $_POST["booktype_bookisbn"];
    $CTGR_ID = $_POST["booktype_ctgrid"];
    if(!empty($BookISBN) && !empty($CTGR_ID)){
        $sqlinsert = "DELETE FROM bookcategory WHERE BookISBN = '$BookISBN' AND CategoryID = '$CTGR_ID'";
        $resultinsert = mysqli_query($connect,$sqlinsert);
        echo ("<script>window.location = '../console/booktype.php';</script>");
    }
    else {
        echo "<script type='text/javascript'>alert('กรุณาระบุข้อมูลให้ครบถ้วน !');</script>";
        echo ("<script>window.location = '../console/booktype.php';</script>");
    }
?>