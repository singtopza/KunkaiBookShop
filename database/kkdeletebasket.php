<?php
    require ('dbconnect.php');
    $BasketNumber = $_GET["BasketNumber"];
    $sql = "DELETE FROM basket WHERE BasketNumber = $BasketNumber";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo ("<script>window.history.go(-1);</script>");
    }
    else {
        echo ("<script>window.location = '../home/basket.php';</script>");
    }
?>