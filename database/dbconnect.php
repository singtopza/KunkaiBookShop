<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    // $username = "usr6242590";
    // $password = "2qpgAWg84T7-!_x";
    $database = "usr6242590_kunkaibookshop";
    $connect = mysqli_connect($host,$username,$password,$database) or die ("ERROR CANT NOT FIND DATABASE kunkaibookshop");
    // mysqli_set_charset($connect, "utf8");
    mysqli_set_charset($connect, "utf8mb4");
    date_default_timezone_set('Asia/Bangkok');
?>