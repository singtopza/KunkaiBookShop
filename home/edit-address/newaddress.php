<?php session_start(); 
require ('../../database/dbconnect.php');
require ('../../php/checkuser.php');
require ('../../php/imgprofile.php');
require ('../../php/badgeitem.php');
$sql_provinces = "SELECT * FROM provinces";
$query_provinces = mysqli_query($connect, $sql_provinces);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../../style/header_in.php"); ?>
      <div class="container">
        <!--ช่องว่าง เปิด-->  
        <h4 class="headerbasket text-center py-5">เพิ่มที่อยู่สำหรับการจัดส่ง</h4>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
        <form action="../../database/kknewaddress.php" method="POST">
        <label for="newaddname">ชื่อ - นามสกุลผู้รับ :</label>
        <input class="form-control mb-3" type="text" id="newaddname" name="newaddname" required>
        <label for="newaddress">ที่อยู่สำหรับการจัดส่ง :</label>
        <textarea class="form-control mb-3" type="text" rows ="3" cols ="60" id="newaddress" name="newaddress" required></textarea>
      <label for="sel1">จังหวัด :</label>
      <select class="form-control mb-3" name="Ref_prov_id" id="provinces" required>
            <option value="" selected disabled></option>
             <?php foreach ($query_provinces as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
      </select>
      <label for="amphures">อำเภอ :</label>
      <select class="form-control mb-3" name="Ref_dist_id" id="amphures" required>
      </select>
      <label for="districts">ตำบล :</label>
      <select class="form-control mb-3" name="Ref_subdist_id" id="districts" required>
      </select>
      <label for="zip_code">รหัสไปรษณีย์ :</label>
       <input class="form-control deleteupdown mb-3"  onkeydown="javascript: return event.keyCode == 69 ? false : true" name="zip_code" id="zip_code" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required>
          <label for="newaddphone">เบอร์ติดต่อ :</label>
          <input class="form-control deleteupdown" type="number" id="newaddphone" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="Phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>
        <button type="submit" class="btn btn-warning btn-block text-black mb-5">เพิ่มที่อยู่</button>
  </form>
          </div>
  <div class="col-3"></div>
        </div> <!-- End row-->
        <!--ช่องว่าง ปิด-->
      </div>
      <?php
require ('../../style/footer_in.php');
?>
<script>
  $(window).on('beforeunload', function(){
  $(window).scrollTop(0);
  });
</script>
</body>
</html>
<?php include('script.php');?>