<?php
    session_start();
    if(isset($_POST['btnlogin'])){
        $secret = "6LeRBcEdAAAAALJyp69wQFObLF3lyVMc8CohMOLd";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        $data = file_get_contents($url);
        $row = json_decode($data, true);
        
        if ($row['success'] == "true") {    
        // ràng buộc biến , tránh lỗi SQL Injection
        $email = isset($_POST['email'])?(string)(int)$_POST['email']:false;
        $pass = isset($_POST['password'])?(string)(int)$_POST['password']:false;
        $conn = mysqli_connect('localhost','root','','db_gmail');
        if(!$conn){
            die("Kết nối tới máy chủ thất bại.");
        }
        // sử dụng hàm mysqli_real_escape_string(), thoát ký tự đặc biệt trong chuỗi, truy vấn sql query an toàn
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $sql = "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['adminlogin'] = $adminlogin; // cấp thẻ truy cập
            header("location: index.php"); // Chuyển hướng tới trang quản trị
        }else{
            $error = "Đăng nhập thất bại.";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        mysqli_close($conn);
          }
          
          else 
          {
              $error = "Wrong CAPCHA, please try again !";
              header("location:login.php?error=$error");
          }
    } else {
        header("location:login.php");
    }
?>