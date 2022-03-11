<?php session_start();  
    require ('dbconnect.php');
    $UserID = $_SESSION['UserID'];
    $BookISBN = $_GET["BookISBN"];
    $BookAmount = $_GET['BookAmount'];
    $sql = "SELECT * FROM books WHERE BookISBN = $BookISBN";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $BBookName = $row["BookName"];
    $BBookAuthor = $row["BookAuthor"];
    $BBookTranslate = $row["BookTranslate"];
    $BBookPrice = $row["BookPrice"];
    $BBookStock = $row["BookStock"];
    if($BookAmount > $BBookStock){
        echo "<script type='text/javascript'>alert('สินค้าชิ้นนี้หมดชั่วคราว !');</script>";
        echo ("<script>window.history.go(-1);</script>");
    } else {
    $SL_basket = "SELECT * FROM basket WHERE UserID = '$UserID' AND BookISBN = '$BookISBN'";
    $SL_basket_q = mysqli_query($connect,$SL_basket);
    $num_SL_basket_q = mysqli_num_rows($SL_basket_q);

    $PriceTotal = (float)$BBookPrice*(float)$BookAmount;
    if($num_SL_basket_q >= 1){
        $SL_basket_result = mysqli_fetch_assoc($SL_basket_q);
        $BookAmount_old = $SL_basket_result["BookAmount"];
        $checkup15 = $BookAmount + $BookAmount_old;
        if($checkup15 > 15){
            $BookAmount_New = 15;
        }
        else {
            $BookAmount_New = $BookAmount_old+$BookAmount;
        }
        $PriceTotal_old = $SL_basket_result["PriceTotal"];
        $PriceTotal_New = $BBookPrice*$BookAmount_New;
        $UD_basket = "UPDATE basket SET BookAmount = '$BookAmount_New', PriceTotal = '$PriceTotal_New' WHERE UserID = '$UserID' AND BookISBN = '$BookISBN'";
        $UD_basket_q = mysqli_query($connect,$UD_basket);
        echo ("<script>window.history.go(-1);</script>");
        // echo ("<script>window.location = '../home/basket.php';</script>");
    }
    else if($num_SL_basket_q == 0) {
        $sqlinsert = "INSERT INTO basket(UserID,BookISBN,BookName,BookAuthor,BookTranslate,BookPrice,BookAmount,PriceTotal) VALUE ('$UserID','$BookISBN','$BBookName','$BBookAuthor','$BBookTranslate','$BBookPrice','$BookAmount','$PriceTotal')";
        $resultinsert = mysqli_query($connect,$sqlinsert);
        if($resultinsert){
            echo ("<script>window.history.go(-1);</script>");
            // echo ("<script>window.location = '../home/basket.php';</script>");
        }
        else{
            $errors = "ล้มเหลว โปรดติดต่อ ศรัณย์ เวียงสิมมา เพื่อแก้ไขปัญหาของคุณ";
            echo "<script type='text/javascript'>alert('$errors');</script>";
            echo ("<script>window.location = '../index.php';</script>");
        }
    }
    }
?>