<?php session_start();
    require ("dbconnect.php");
    $Email = $_POST["Email"];
    $otp = $_POST["otp"];
    $Password = $_POST["Password"];
    $Password = md5($Password);
    if ($Email == '' || $otp == '') {
        $message = "กรุณาระบุข้อมูลให้ครบถ้วน !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
            echo ("<script>window.location = '../home/changepwd.php';</script>");
            } else {
            echo ("<script>window.location = '../home/resetpwd.html';</script>");
            }
    }
    else {
    if ($_POST["Password"] == $_POST["CPassword"]){
        $sql = "UPDATE users SET UserPassword = '$Password' WHERE Email = '$Email'";
        mysqli_query($connect,$sql);
        $message = "เปลี่ยนรหัสผ่านเสร็จเร็จแล้ว !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
        echo ("<script>window.location = '../home/profile.php';</script>");
        } else {
        echo ("<script>window.location = '../home/login.php';</script>");
        }
    }
    else {
        $error = "รหัสผ่านไม่ตรงกัน โปรดลองใหม่อีกครั้ง !";
        echo "<script type='text/javascript'>alert('$error');</script>";
        if (isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])) {
        echo ("<script>window.location = '../home/changepwd.php';</script>");
        } else {
        echo ("<script>window.location = '../home/resetpwd.html';</script>");
        }
    }
    }
?>