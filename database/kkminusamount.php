<?php
    require ('dbconnect.php');
    $bookuser = $_GET["bookuser"];
    $newaddress = $_GET["bookamount"];
    $sumamount = $newaddress-1;
    
    $sql = "SELECT * FROM basket WHERE BasketNumber = $bookuser";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $BBookPrice = $row["BookPrice"];

    $PriceTotal = (float)$BBookPrice*(float)$sumamount;

    $sql = "UPDATE basket SET BookAmount = '$sumamount', PriceTotal = '$PriceTotal' WHERE BasketNumber = '$bookuser'";
    mysqli_query($connect,$sql);

    if($sumamount <= 0) {

        $PriceTotal = (float)$BBookPrice*1;
        $sql = "UPDATE basket SET BookAmount = '1', PriceTotal = '$PriceTotal' WHERE BasketNumber = '$bookuser'";
        mysqli_query($connect,$sql);
    }
    echo ("<script>window.history.go(-1);</script>");
?>