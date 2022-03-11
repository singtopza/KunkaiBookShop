<?php
    require ('dbconnect.php');
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Password = md5($Password);
    $Sex = $_POST["Sex"];
    $Phone = $_POST["Phone"];
    $check = "SELECT * FROM users WHERE Email = '$Email'";
    $result1 = mysqli_query($connect,$check);
    $row = mysqli_num_rows($result1);
    if($row>0){
        $notfound = "อีเมลนี้ถูกใช้แล้ว โปรดใช้อีเมลอื่น !";
        echo "<script type='text/javascript'>alert('$notfound');</script>";
        echo ("<script>window.history.go(-1);</script>");
    }
    else{
        $sql = "INSERT INTO users(FirstName,LastName,Email,UserPassword,Sex,Phone,UStatus) VALUE ('$FirstName','$LastName','$Email','$Password','$Sex','$Phone','Member')";
        $result = mysqli_query($connect,$sql);
        if($result){
            $message = "สมัครสมาชิกสำเร็จแล้ว !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo ("<script>window.location = '../home/login.php';</script>");
        }
        else{
            $errors = "ไม่สามารถสมัครสมาชิกได้ โปรดติดต่อฝ่ายสนับสนุน";
            echo "<script type='text/javascript'>alert('$errors');</script>";
            echo ("<script>window.location = '../home/register.php';</script>");
        }
    }
?>