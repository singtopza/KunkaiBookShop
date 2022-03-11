<?php
  $UserID = $_SESSION['UserID'];
  $FirstName = $_SESSION['FirstName'];
  $LastName = $_SESSION['LastName'];
  $UStatus = $_SESSION['UStatus'];
  $Timestamp_in = $_SESSION["ss_timein"];  
  $Timestamp = $_SESSION["ss_timeout"];
  $Timestamp_Admin = $_SESSION["ss_timeout_admin"];
 	if($UStatus=='Officer' || $UStatus=='Admin'){ 
  ?>
    <script type="text/javascript"> 
    function timeout_c(){
    var refresh=0;
    mytime=setTimeout('timeout()',refresh)
    }
    function timeout() {
    var time_now = new Date();
    var gtime = time_now.getTime();
    if(gtime > <?php echo $Timestamp_Admin; ?>){
      location.href = "../database/kklogout.php";
      window.alert("เซสชั่นหมดอายุ !");
    }
    var time_join = gtime - <?php echo $Timestamp_in ?>;
    var gh = time_now.getHours();
    if (gh<10){
      gh = "0"+gh
    }
    var gm = time_now.getMinutes();
    if (gm<10){
      gm = "0"+gm
    }
    var gs = time_now.getSeconds();
    if (gs<10){
      gs = "0"+gs
    }

    var seconds = Math.floor((time_join / 1000) % 60);
    var minutes = Math.floor((time_join / (1000 * 60)) % 60);
    var hours = Math.floor((time_join / (1000 * 60 * 60)) % 24);
    // hours = (hours < 10) ? "0" + hours : hours;
    hours = (hours < 10) ? + hours : hours;
    minutes = (minutes < 10) ? + minutes : minutes;
    seconds = (seconds < 10) ? + seconds : seconds;
    var time_set_hr = hours;
    var time_set_m = minutes;
    var time_set_s = seconds;

    var time_now_set = gh + ":" + gm + ":" + gs;
    document.getElementById('time_now_set').innerHTML = time_now_set;
    document.getElementById('timehr').innerHTML = time_set_hr;
    document.getElementById('timem').innerHTML = time_set_m;
    document.getElementById('times').innerHTML = time_set_s;
    timeout_c();
    }
    </script>
<?php
  }
  else {
    Header("Location: ../database/kklogout.php"); 
  }
?>