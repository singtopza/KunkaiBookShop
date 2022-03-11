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
<?php require ("../style/admin_style.php"); ?>
          <div class="container-fluid mt-5">
          <h3 class="text-center mb-5">ผู้จัดทำ</h3>
          <div class="row">
            <div class="col-12">
              <div id="carouselbannerkk" class="carousel slide" data-interval="2000" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="0" class="active"></li>
                  <li class="carouselhover" data-target="#carouselbannerkk" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="../home/promotions/promotion1.php">
                    <img class="d-block w-100" src="../img/probanner/sl01.jpg"  alt="">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="../home/promotions/promotion2.php">
                    <img class="d-block w-100" src="../img/probanner/sl02.jpg"  alt="">
                    </a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselbannerkk" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon carouseledit" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselbannerkk" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" id="carouseledit" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div> <!--End col-->
        </div> <!--End row-->
          </div>



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