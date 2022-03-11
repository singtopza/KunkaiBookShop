<?php
require ('../database/dbconnect.php');
$OrderLast = $_POST["OrderLast"];
$CBOrderLast = implode(",",$OrderLast);
$sqldel = "DELETE FROM orders WHERE OrderLast IN ($CBOrderLast)";
$result = mysqli_query($connect,$sqldel);
if($result){
  echo ("<script>window.location = '../console/fororder.php';</script>");
    exit(0);
}
else {
    echo "Error"."<br>";
}
?>
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