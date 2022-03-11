<html>
<head>
<link rel="icon"type="image/png"href="../img/Logo.png">
</head>
<?php session_start();
require ('dbconnect.php');
    $UserID = $_SESSION['UserID'];

    $cbproduct3 = $_GET["cbproduct"];
    if(isset($cbproduct3)){
    $basketsqlsum = "SELECT SUM(PriceTotal) AS PriceTotal FROM basket WHERE BasketNumber IN ($cbproduct3) AND UserID = $UserID";
    $rbasketsum = mysqli_query($connect,$basketsqlsum);
    $rbasketsumrow = mysqli_fetch_assoc($rbasketsum);
    $pricetotal = $rbasketsumrow["PriceTotal"];

    $sqlcbproduct_amount = "SELECT SUM(BookAmount) AS BookAmount FROM basket WHERE BasketNumber IN ($cbproduct3) AND UserID = $UserID";
    $rscbproduct_amount = mysqli_query($connect,$sqlcbproduct_amount);
    $rowrscbproduct_amount = mysqli_fetch_assoc($rscbproduct_amount);
    require ("../php/countshipping.php");

    $sqlcbproduct3 = "SELECT * FROM basket WHERE BasketNumber IN ($cbproduct3)";
    $rscbproduct = mysqli_query($connect,$sqlcbproduct3);

    $newaddress2 = "SELECT * FROM addressselect WHERE UserIDSelect = $UserID";
    $resultnewaddress2 = mysqli_query($connect,$newaddress2);
    $rnewaddresse2 = mysqli_fetch_assoc($resultnewaddress2);

    $address = $rnewaddresse2["UserNameSelect"]." ".$rnewaddresse2["UserAddressSelect"]." จังหวัด: ".$rnewaddresse2["ProvinceSelect"]." อำเภอ: ".$rnewaddresse2["DistrictSelect"]." ตำบล: ".$rnewaddresse2["Sub_DistrictSelect"]." ".$rnewaddresse2["Postal_CodeSelect"]." เบอร์ติดต่อ ".$rnewaddresse2["UserPhoneSelect"];

    $date = date('Y-m-d');
    $time = date('H:i:s');
    $dandt = $date." ".$time;

    $rand1 = (rand(0,9));
    $rand2 = (rand(0,9));
    $rand3 = (rand(0,9));
    $rand4 = (rand(0,9));
    $rand5 = (rand(0,9));
    $rand6 = (rand(0,9));
    $rand7 = (rand(0,9));
    $rand8 = (rand(0,9));
    $rand9 = (rand(0,9));
    $rand10 = (rand(0,9));
    $rand = "TH".$rand1.$rand2.$rand3.$rand4.$rand5.$rand6.$rand7.$rand8.$rand9.$rand10;

    $rand1_ = (rand(0,9));
    $rand2_ = (rand(0,9));
    $rand3_ = (rand(0,9));
    $rand4_ = (rand(0,9));
    $rand5_ = (rand(0,9));
    $rand6_ = (rand(0,9));
    $rand7_ = (rand(0,9));
    $rand8_ = (rand(0,9));
    $rand9_ = (rand(0,9));
    $rand10_ = (rand(0,9));
    $rand_ = "TH".$rand1_.$rand2_.$rand3_.$rand4_.$rand5_.$rand6_.$rand7_.$rand8_.$rand9_.$rand10_;

    $select_usr_order = "SELECT * FROM orders WHERE OrderNumber = '$rand'";
    $usr_order_q = mysqli_query($connect,$select_usr_order);
    $num_usr_order = mysqli_num_rows($usr_order_q);
    if($num_usr_order>=1){
        $rand = $rand_;
    }

    $allprice = (float)$pricetotal+(float)$shippingcost;

        while ($rowrscbproduct = mysqli_fetch_assoc($rscbproduct)){
            $BookISBN = $rowrscbproduct["BookISBN"];
            $BookName = $rowrscbproduct["BookName"];
            $BookPrice = $rowrscbproduct["BookPrice"];
            $BookAmount = $rowrscbproduct["BookAmount"];
            $PriceForBook = (float)$BookPrice * (float)$BookAmount;

            $selectbook_order = "SELECT * FROM books WHERE BookISBN = $BookISBN";
            $selectbook_order_q = mysqli_query($connect,$selectbook_order);
            $selectbook_order_fetch = mysqli_fetch_assoc($selectbook_order_q);
            $BookSell = $selectbook_order_fetch["BookSell"];
            $BookSell = $BookSell+$BookAmount;
            $BookStock = $selectbook_order_fetch["BookStock"];
            $BookStock_cut = $BookStock-$BookAmount;

            if($BookStock_cut < 0){
                $AllAmount = $AllAmount-$BookAmount;
                if (isset($AllAmount)){
                    if ($AllAmount > 199){
                      $shippingcost = 1500;
                    }
                    elseif ($AllAmount > 99){
                      $shippingcost = 800;
                    }
                    elseif ($AllAmount > 49){
                      $shippingcost = 500;
                    }
                    elseif ($AllAmount > 29){
                      $shippingcost = 300;
                    }
                    elseif ($AllAmount > 19){
                      $shippingcost = 200;
                    }
                    elseif ($AllAmount > 9){
                      $shippingcost = 120;
                    }
                    elseif ($AllAmount > 5){
                      $shippingcost = 70;
                    }
                    elseif ($AllAmount > 4){
                      $shippingcost = 50;
                    }
                    elseif ($AllAmount > 3){
                      $shippingcost = 45;
                    }
                    elseif ($AllAmount > 2){
                      $shippingcost = 40;
                    }
                    elseif ($AllAmount > 1){
                      $shippingcost = 35;
                    }
                    elseif ($AllAmount > 0){
                      $shippingcost = 30;
                    }
                    else {
                      $shippingcost = null;
                    }
                    }
                    else {
                      $shippingcost = null;
                    }
                $allprice = ((float)$pricetotal+(float)$shippingcost)-$PriceForBook;
                echo "<script>alert('สินค้า \"$BookName\" ไม่เพียงพอสำหรับสั่งซื้อ\\nรหัสสินค้าสินค้า $BookISBN\\nสินค้าชิ้นนี้จะถูกยกเลิกโดยอัตโนมัติ\\n\\nยอดชำระถูกแก้ไขเป็น $allprice บาท');</script>";
            } else {
            $insert = "INSERT INTO orders(OrderNumber,DateWhen,TimeWhen,DAndT,UserID,BookISBN,OrderAmount,OrderPrice,ShippingCost,OrderTotal,OrderAddress) 
            VALUE ('$rand','$date','$time','$dandt','$UserID','$BookISBN','$BookAmount','$PriceForBook','$shippingcost','$allprice','$address')";
            $resultinsertorder = mysqli_query($connect,$insert);

            $updatebook_adterbuy = "UPDATE books SET BookSell = '$BookSell' , BookStock = '$BookStock_cut' WHERE BookISBN = '$BookISBN'";
            $updatebook_adterbuy_q = mysqli_query($connect,$updatebook_adterbuy);

            $deletebasket_order = "DELETE FROM basket WHERE BookISBN = '$BookISBN' AND UserID = $UserID";
            $deletebasket_order_q = mysqli_query($connect,$deletebasket_order);
            }
        }
        echo ("<script>window.location = '../home/ordered.php';</script>");
      } else {
        echo ("<script>window.location = '../index.php';</script>");
      }
?>
</html>