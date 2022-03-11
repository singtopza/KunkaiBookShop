<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkadmin.php');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/allpage.js"></script>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<span id="timem" class="text-danger" style="display:none;"></span><span id="times" class="text-danger" style="display:none;"></span>
<?php require ("../style/admin_style.php"); ?>
          <div class="container-fluid mt-5">
          <h3 class="text-center mb-3">รายชื่อพนักงาน</h3>
<?php
    $sql = "SELECT * FROM users WHERE UStatus = 'Officer' OR UStatus = 'Admin' ORDER BY UStatus ASC";
    $result=mysqli_query($connect,$sql);
?>
<div class="row mb-4">
<div class="col-10">
    <form action="foruser_del.php" method="POST">
    <input type="number" class="stdenumber align-middle" name="UserID" placeholder="ระบุ UserID ที่ต้องการลบ">
    <input class="btn btn-danger stbtnnumber" type="submit" value="ลบ">
    </form>
    </div>
  <div class="col-2"><a href="../console/foradmin_add.php"><button class="btn btn-info text-center" style="float: right;"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;เพิ่มพนักงาน</button></a></div>
</div>
<table width="100%" style="margin-bottom:700px;">
    <tr class="text-center">
        <th class="borderuser" width="10%">UserID</th>
        <th class="borderuser" width="10%">FirstName</th>
        <th class="borderuser" width="10%">LastName</th>
        <th class="borderuser" width="15%">Email</th>
        <th class="borderuser" width="25%">UserPassword</th>
        <th class="borderuser" width="10%">Sex</th>
        <th class="borderuser" width="10%">Phone</th>
        <th class="borderuser" width="10%">UStatus</th>
    </tr>
<?php
    while($row=mysqli_fetch_assoc($result)){
?>
    <tr class="text-center">
    <?php if($row["UStatus"] == 'Admin') { ?>
        <td class="borderusers"><font color="black"><?php echo $row["UserID"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["FirstName"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["LastName"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["Email"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["UserPassword"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["Sex"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["Phone"]; ?></font></td>
        <td class="borderusers"><font color="black"><?php echo $row["UStatus"]; ?></font></td>
        <?php } else { ?>
        <td class="borderusers"><?php echo $row["UserID"]; ?></td>
        <td class="borderusers"><?php echo $row["FirstName"]; ?></td>
        <td class="borderusers"><?php echo $row["LastName"]; ?></td>
        <td class="borderusers"><?php echo $row["Email"]; ?></td>
        <td class="borderusers"><?php echo $row["UserPassword"]; ?></td>
        <td class="borderusers"><?php echo $row["Sex"]; ?></td>
        <td class="borderusers"><?php echo $row["Phone"]; ?></td>
        <td class="borderusers"><?php echo $row["UStatus"]; ?></td>
        <?php } ?>
    </tr>
<?php
}
?>
</table>
</div> <!--Eng ConF-->
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
</body>
</html>
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