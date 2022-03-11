<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkofficer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/console.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<span id="time_now_set" style="display:none;"></span>
<span id="timehr" style="display:none;"></span>
<span id="timem" style="display:none;"></span>
<span id="times" style="display:none;"></span>
<?php require ("../style/officer_style.php"); ?>
          <div class="container-fluid mt-5">
          <h3 class="text-center mb-3">จัดการออเดอร์</h3>
<?php
    $sql_orders = "SELECT * FROM orders ORDER BY DAndT DESC";
    $result_order = mysqli_query($connect,$sql_orders);
?>
    <div class="row mb-4">
  <div class="col-10">
  <form action="fororder_del.php" method="POST">
    <input type="text" class="stdenumber align-middle" name="OrderNumber" placeholder="ระบุออร์เดอร์ที่ต้องการลบ">
    <input class="btn btn-danger stbtnnumber" type="submit" value="ลบ">
    </form>
  </div>
  <div class="col-2 text-right"><font color="white"><div class="btn btn-info" id="createpdf_fororder" onclick="backtomyhome()">Create PDF</div></font></div>
</div>
<?php
require_once 'createpdf/autoload.php';
$mpdf = new \Mpdf\Mpdf();
    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];
    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];
    $mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabun.ttf',
            'I' => 'THSarabun Italic.ttf',
            'B' => 'THSarabun Bold.ttf',
            'BI'=> 'THSarabun Bold Italic.ttf' 
        ]
    ],
    'default_font' => 'sarabun'
]);
ob_start();
?>
<table width="100%">
    <tr class="text-center">
        <th class="borderuser" width="10%">ออร์เดอร์</th>
        <th class="borderuser" width="10%">วันที่</th>
        <th class="borderuser" width="5%">เวลา</th>
        <th class="borderuser" width="5%">ผู้ใช้</th>
        <th class="borderuser" width="10%">รหัสหนังสือ</th>
        <th class="borderuser" width="5%">จำนวน</th>
        <th class="borderuser" width="10%">ราคารวม</th>
        <th class="borderuser" width="5%">ค่าจัดส่ง</th>
        <th class="borderuser" width="10%">ยอดที่ต้องชำระ(บาท)</th>
        <th class="borderuser" width="25%">ที่อยู่สำหรับการจัดส่ง</th>
        <th class="borderuser" width="5%">ลบ</th>
    </tr>
<?php
    while($row_order = mysqli_fetch_assoc($result_order)){
        if(strpos($row_order["OrderPrice"],".") !== false){
            $row_order_OrderPrice = number_format($row_order["OrderPrice"], 2);
        } else {
            $row_order_OrderPrice = number_format($row_order["OrderPrice"]); 
        }
        $row_order_ShippingCost = $row_order["ShippingCost"];
        // if(strpos($row_order["ShippingCost"],".") !== false){
        //     $row_order_ShippingCost = number_format($row_order["ShippingCost"],2);
        // } else {
        //     $row_order_ShippingCost = number_format($row_order["ShippingCost"]);
        // }
        if(strpos($row_order["OrderTotal"],".") !== false){
            $row_order_OrderTotal = number_format($row_order["OrderTotal"], 2);
        } else {
            $row_order_OrderTotal = number_format($row_order["OrderTotal"]);  
        }
?>
    <tr class="text-center">
        <td class="borderusers"><?php echo $row_order["OrderNumber"];?></td>
        <td class="borderusers"><?php echo $row_order["DateWhen"];?></td>
        <td class="borderusers"><?php echo $row_order["TimeWhen"];?></td>
        <td class="borderusers"><?php echo $row_order["UserID"];?></td>
        <td class="borderusers"><?php echo $row_order["BookISBN"];?></td>
        <td class="borderusers"><?php echo $row_order["OrderAmount"];?></td>
        <td class="borderusers"><?php echo $row_order_OrderPrice;?></td>
        <td class="borderusers"><?php echo $row_order_ShippingCost;?></td>
        <td class="borderusers"><?php echo $row_order_OrderTotal;?></td>
        <td class="borderusers pl-3 pr-1" style="text-align:left;"><?php echo $row_order["OrderAddress"];?></td>
        <td class="borderusers">
        <form action="fororder_del_cb.php" method="POST" style="margin:0px 0px 0px 0px;">
        <input type="checkbox" name="OrderLast[]" style="width:50px; height:50px;" value="<?php echo $row_order["OrderLast"];?>">
        </td>
    </tr>
<?php
}
?>
</table>
<?php
$cheader = "
<p style=\"font-size:30px; text-align:center;\">ออเดอร์ลูกค้า</p>
";
?>
<?php
    $html = ob_get_contents();
    $mpdf->AddPage('L');
    $mpdf->WriteHTML($cheader.$html);
    $mpdf->Output('../console/createpdf/pdffile/Order.pdf', \Mpdf\Output\Destination::FILE);
    ob_end_flush();
?>
</div> <!--Eng ConF-->
<br><br><br>
<div>
<input type="submit" class="btn btn-danger text-white btn-block py-3 fixed-bottom" value="ลบข้อมูล(CB)">
</div>
</form>
<br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
<script>
  $(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
        return false;
    }
    });
    $(document).on("contextmenu", function (e) {        
        e.preventDefault();
    });
</script>
<script>
function backtomyhome() {
    var timeleft = 1;
    var downloadTimer = setInterval(function(){
    if(timeleft == 1){
        document.getElementById("createpdf_fororder").innerHTML = "กำลังสร้างไฟล์...";
    }
    else if(timeleft == 0){
      clearInterval(downloadTimer);
      var url = '../console/createpdf/pdffile/Order.pdf'; 
      setTimeout(function(){ window.location = url; });
    }
    timeleft -= 1;
    }, 1000);
  }
</script>