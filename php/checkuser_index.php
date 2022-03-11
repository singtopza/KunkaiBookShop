<?php
  $UserID = $_SESSION['UserID'];
  $FirstName = $_SESSION['FirstName'];
  $LastName = $_SESSION['LastName'];
  $UStatus = $_SESSION['UStatus'];
  $Timestamp_in = $_SESSION["ss_timein"];  
  $Timestamp = $_SESSION["ss_timeout"];
  $Timestamp_Admin = $_SESSION["ss_timeout_admin"];
 	if($UStatus=='Member'){ 
  ?>
  <script type="text/javascript"> 
    function timeout_c(){
    var refresh=0;
    mytime=setTimeout('timeout()',refresh)
    }
    function timeout() {
    var x = new Date();
    var gtime = x.getTime();
    if(gtime > <?php echo $Timestamp; ?>){
      location.href = "database/kklogout.php";
      window.alert("เซสชั่นหมดอายุ !");
    }
    timeout_c();
    }
  </script>
<?php
  }
  else if($UStatus=='Officer'){
    ?>
  <script type="text/javascript"> 
    function timeout_c(){
    var refresh=0;
    mytime=setTimeout('timeout()',refresh)
    }
    function timeout() {
    var x = new Date();
    var gtime = x.getTime();
    if(gtime > <?php echo $Timestamp_Admin; ?>){
      location.href = "database/kklogout.php";
      window.alert("เซสชั่นหมดอายุ !");
    }
    timeout_c();
    }
  </script>
  <?php
    }
 	else if($UStatus=='Admin'){
  ?>
      <script type="text/javascript"> 
    function timeout_c(){
    var refresh=0;
    mytime=setTimeout('timeout()',refresh)
    }
    function timeout() {
    var x = new Date();
    var gtime = x.getTime();
    if(gtime > <?php echo $Timestamp_Admin; ?>){
      location.href = "database/kklogout.php";
      window.alert("เซสชั่นหมดอายุ !");
    }
    timeout_c();
    }
  </script>
<?php
  }
  else {
    echo ("<script>location.href='database/kklogout.php'</script>");
  }
?>