<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkuser.php');
require ('../php/imgprofile.php');
require ('../php/badgeitem.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/allpage.js"></script>
<style>
  .card{
    border: 0px;
  }
</style>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<?php require ("../style/header.php"); ?>
        <div class="container"> 
            <!--ช่องว่าง เปิด-->
        <h5 class="headerbasket text-center pt-5 pb-3">สิทธิพิเศษสำหรับคุณ</h5>
          <div class="row mb-4">
            <div class="col-4">
             <div class="card" style="width: 100%;">
                <img src="../img/code_price.png" class="card-img-top">
                <div class="card-body text-center"> 
                  <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                </div>
                </div>
                  </div>
            <div class="col-4 ">
              <div class="card" style="width: 100%;">
                <img src="../img/code_price.png" class="card-img-top">
                <div class="card-body text-center"> 
                  <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                </div>
            </div>
            </div>
            <div class="col-4">
              <div class="card" style="width: 100%;">
                <img src="../img/code_price.png" class="card-img-top" >
                <div class="card-body text-center"> 
                  <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                </div>
            </div>
          </div>
          </div>
          <div class="row mb-5">
            <div class="col-4">
              <div class="card" style="width: 100%;">
                 <img src="../img/code_free.png" class="card-img-top">
                 <div class="card-body text-center"> 
                  <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                </div>
                   </div>
                   </div>
                   <div class="col-4">
                    <div class="card" style="width: 100%;">
                       <img src="../img/code_free.png" class="card-img-top">
                       <div class="card-body text-center"> 
                        <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                      </div>
                         </div>
                         </div>
                         <div class="col-4">
                          <div class="card" style="width: 100%;">
                             <img src="../img/code_free.png" class="card-img-top">
                             <div class="card-body text-center"> 
                              <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                            </div>
                               </div>
                               </div>
                               </div>
                               <div class="row mb-5">
                                <div class="col-4">
                                  <div class="card" style="width: 100%;">
                                     <img src="../img/code_free.png" class="card-img-top">
                                     <div class="card-body text-center"> 
                                      <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                                    </div>
                                       </div>
                                       </div>
                                       <div class="col-4">
                                        <div class="card" style="width: 100%;">
                                           <img src="../img/code_free.png" class="card-img-top">
                                           <div class="card-body text-center"> 
                                            <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                                          </div>
                                             </div>
                                             </div>
                                             <div class="col-4">
                                              <div class="card" style="width: 100%;">
                                                 <img src="../img/code_free.png" class="card-img-top">
                                                 <div class="card-body text-center"> 
                                                  <div class="btn btn-warning" onclick="runrandomcode()">เก็บคูปอง</div>
                                                </div>
                                                   </div>
                                                   </div>
                                                   </div>
            <!--ช่องว่าง ปิด-->
          </div>
          <?php
require ('../style/footer.php');
?>
    <script>
      $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
      });
    </script>
<script>
function runrandomcode(){
  function randomcode(length){
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
  }
  alert("โค้ดของคุณคือ : "+randomcode(12));
}
</script>
</body>
</html>