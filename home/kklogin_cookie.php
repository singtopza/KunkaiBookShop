<?php session_start();
    require ('../database/dbconnect.php');
    $errors = array();
    $Email = mysqli_real_escape_string($connect, $_POST["Email"]);
    $Password = mysqli_real_escape_string($connect, $_POST["Password"]);
    $Password_black = mysqli_real_escape_string($connect, $_POST["Password"]);
    $Password = md5($Password);
    if (count($errors) == 0) {
        $sql = "SELECT * FROM users WHERE Email='$Email' AND UserPassword = '$Password'";
    }
    $result = mysqli_query($connect,$sql);
    if($result){
        
        if(!empty($_POST["acceptlog"])){
            setcookie ("member_login",$Email,time() + (10 * 365 * 24 * 60 * 60));  
            setcookie ("member_password",$Password_black,time() + (10 * 365 * 24 * 60 * 60));
        }
        else  
        {  
         if(isset($_COOKIE["member_login"]))   
         {  
          setcookie ("member_login","");  
         }  
         if(isset($_COOKIE["member_password"]))   
         {  
          setcookie ("member_password","");  
         }  
        }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION["UserID"] = $row["UserID"];
        $_SESSION["FirstName"] = $row["FirstName"];
        $_SESSION["LastName"] = $row["LastName"];
        $_SESSION["UStatus"] = $row["UStatus"];
        $datehis = date('His');
        $_SESSION["ss_timein"] = time()."000";
        $_SESSION["ss_timeout"] = time() + (30 * 24 * 60 * 60)."000"; //เวลา 30 วัน 24 ชั่วโมง 60 นาที 60 วินาที *แตะออกหลังจาก 30 วัน
        $_SESSION["ss_timeout_admin"] = time() + (24 * 60 * 60)."000";

        if($_SESSION["UStatus"]=="Admin"){ 
            // echo "<script>alert('เข้าสู่ระบบผู้จัดการแล้ว !');</script>";
            // echo ("<script>window.location = '../console/setting_admin.php';</script>");
            echo ("<script>window.location = '../index.php';</script>");
          }
        if ($_SESSION["UStatus"]=="Officer"){ 
            // echo "<script>alert('เข้าสู่ระบบพนักงานแล้ว !');</script>";
            // echo ("<script>window.location = '../console/setting.php';</script>");
            echo ("<script>window.location = '../index.php';</script>");
          }
        if($_SESSION["UStatus"]=="Member"){ 
            // echo "<script>alert('เข้าสู่ระบบสำเร็จแล้ว !');</script>";
            echo ("<script>window.location = '../index.php';</script>");
        }
        else {
            echo '<script type="text/javascript">'; 
            echo "alert('ไม่สามารถเข้าสู่ระบบได้ โปรดตรวจสอบอีเมล และรหัสผ่านก่อนทำการเข้าสู่ระบบ !');";
            echo ("window.location = '../home/login.php';");
            echo '</script>';
        }
    }
    else {
        echo '<script type="text/javascript">'; 
        echo "alert('ไม่สามารถเข้าสู่ระบบได้ โปรดตรวจสอบอีเมล และรหัสผ่านก่อนทำการเข้าสู่ระบบ !');";
        echo ("window.location = '../home/login.php';");
        echo '</script>';
    }
    }
    else {
        echo '<script type="text/javascript">'; 
        echo "alert('ไม่สามารถเข้าสู่ระบบได้ โปรดตรวจสอบอีเมล และรหัสผ่านก่อนทำการเข้าสู่ระบบ !');";
        echo ("window.location = '../home/login.php';");
        echo '</script>';
    }
?>