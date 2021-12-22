<?php
    session_start();
    if(isset($_POST['btnlogin'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
        $conn = mysqli_connect('localhost','root','','db_gmail');
        if(!$conn){
            die("Kết nối tới máy chủ thất bại.");
        }
        $sql = "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['adminlogin'] = $adminlogin;
            header("location: admin.php"); 
        }else{
            $error = "Đăng nhập thất bại.";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>