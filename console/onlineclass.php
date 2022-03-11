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
  <style>
  div.card{
    border-top-left-radius: 360px;
    border-top-right-radius: 360px;
  }
  body{
    background-image: url("../img/intro-bg.jpg");
    width: 100%;
    height: 100vh;
    position: relative;
    background: #f5f8fd url(../img/intro-bg.jpg) center top no-repeat;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  </style>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
    display_ct();
}
</script>
<span id="time_now_set" style="display:none;"></span>
<span id="timehr" style="display:none;"></span>
<span id="timem" style="display:none;"></span>
<span id="times" style="display:none;"></span>
<?php require ("../style/admin_style.php"); ?>
<div class="container my-5">
<h3 class="text-center">ห้องเรียนออนไลน์ 62/45 ปีการศึกษา 2563</h3>
<?php  
 $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
    "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
    "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
    "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม"); 
 
 $vardate=date('Y-m-d');
 $yy=date('Y');
 $mm =date('m');$dd=date('d'); 
if ($dd<10){
    $dd=substr($dd,1,2);
}
  $datee=$dd ." ".$_month_name[$mm]."  ".$yy+= 543;
?>
<h5 class="text-center text-danger mb-5"><?php echo "วันที่ ".$datee." เวลา "; ?><span id="ct"></span></h5>
<div class="row mb-2">
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://meet.google.com/kpm-pobu-qoo" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/7152312.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>ผู้ช่วยศาสตราจารย์ สุธารัตน์ ชาวนาฟาง</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">การออกแบบและเขียนโปรแกรมเว็บเพจ 2</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <a href="https://meet.google.com/kpm-pobu-qoo" target="_blank" class="btn btn-primary" style="width:100%;">เข้าห้องเรียน</a>
                  </div>
                  <div class="col-6 px-1">
                  <button class="btn btn-primary" style="width:100%;" disabled>เช็คชื่อ</button>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://meet.google.com/vec-bnrt-vmb" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/7152101.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>ผู้ช่วยศาสตราจารย์ ดร. อุษณีย์ ภักดีตระกูลวงศ์</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">การจัดการความต้องการทางซอฟต์แวร์</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <a href="https://meet.google.com/vec-bnrt-vmb" target="_blank" class="btn btn-primary" style="width:100%;">เข้าห้องเรียน</a>
                  </div>
                  <div class="col-6 px-1">
                  <a href="https://docs.google.com/forms/d/e/1FAIpQLSdkZdbpGftCdqRMvxyGEwbWNhFV43_2uwoTf8Jk8JnsKVarwA/viewform" target="_blank" class="btn btn-primary" style="width:100%;">เช็คชื่อ</a>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://meet.google.com/lookup/dxraqd6zi5" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/7152405.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>	ผู้ช่วยศาสตราจารย์ สมเกียรติ ช่อเหมือน</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">การเขียนโปรแกรมเชิงวัตถุ</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <a href="https://meet.google.com/lookup/dxraqd6zi5" target="_blank" class="btn btn-primary" style="width:100%;">เข้าห้องเรียน</a>
                  </div>
                  <div class="col-6 px-1">
                  <button class="btn btn-primary" style="width:100%;" disabled>เช็คชื่อ</button>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://meet.google.com/oyo-igxr-igc" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/7153103.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>อาจารย์ นฤพล สุวรรณวิจิตร</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">การประกันคุณภาพซอฟต์แวร์  </font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <a href="https://meet.google.com/oyo-igxr-igc" target="_blank" class="btn btn-primary" style="width:100%;">เข้าห้องเรียน</a>
                  </div>
                  <div class="col-6 px-1">
                  <a href="https://forms.gle/wFwtgU7w1pMciigz8" target="_blank" class="btn btn-primary" style="width:100%;">เช็คชื่อ</a>
                  </div>
                  </div>
                </div>
</div>
</div>
</div>
<div class="row mb-5">
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://zoom.us/j/94999550583?pwd=TlpUMXRydXhpUG1xbnVwQUdQb1RpZz09" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/1500135.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <!-- <p class="card-title" style="height:37px;"><strong>Aj. Paul Alvin Gonzales Dimayuga</strong></p> -->
                  <p class="card-title" style="height:37px;"><strong>Aj. พอ</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">ภาษาต่างดาวเพื่อการวิดีโอ</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <button class="btn btn-danger" style="width:100%;" disabled>เข้าห้องเรียน</button>
                  </div>
                  <div class="col-6 px-1">
                  <button class="btn btn-danger" style="width:100%;" disabled>เช็คชื่อ</button>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
              <a href="https://us04web.zoom.us/j/76026334989?pwd=ekRiL0pqVkNoSFJXMWhraXMwVjBqQT09" target="_blank">
              <img class="card-img-top" src="../img/onlineclass/2000114.png" style="width: 100%;" heighttarget="_blank">
              </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>ดร. วราภรณ์ วิชญรัฐ</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">สังคมไทยในบริบทโลก</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <a href="https://us04web.zoom.us/j/76026334989?pwd=ekRiL0pqVkNoSFJXMWhraXMwVjBqQT09" target="_blank" class="btn btn-primary" style="width:100%;">เข้าห้องเรียน</a>
                  </div>
                  <div class="col-6 px-1">
                  <button class="btn btn-primary" style="width:100%;" disabled>เช็คชื่อ</button>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 100%; height: 97%;">
            <a href="#" onclick="alertcheckname()">
              <img class="card-img-top" src="../img/onlineclass/4000129.png" style="width: 100%;" heighttarget="_blank">
            </a>
                  <div class="card-body">
                  <p class="card-title" style="height:37px;"><strong>อาจารย์ ชูชีพ คงมีชนม์</strong></p>
                  <p class="card-text fs16" style="height:40px;"><font color="black">นันทนาการเพื่อสุขภาพ</font></p>
                  <div class="row">
                  <div class="col-6 px-1">
                  <button class="btn btn-primary" style="width:100%;" disabled>เข้าห้องเรียน</button>
                  </div>
                  <div class="col-6 px-1">
                  <button class="btn btn-primary" style="width:100%;" disabled>เข้าห้องเรียน</button>
                  </div>
                  </div>
                </div>
</div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
<br><br><br><br><br>
</body>
</html>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
<script>
function alertcheckname() {
  alert("วิชานี้ ไม่มีการเรียนออนไลน์");
}
</script>
<script type="text/javascript"> 
function display_c(){
var refresh=0; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var x = new Date()
// var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
// x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
$gh = x.getHours();
if ($gh<10){
  $gh = "0"+$gh
}
$gm = x.getMinutes();
if ($gm<10){
  $gm = "0"+$gm
}
$gs = x.getSeconds();
if ($gs<10){
  $gs = "0"+$gs
}
var x1 = $gh + ":" + $gm + ":" +  $gs;
document.getElementById('ct').innerHTML = x1;
display_c();
}
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