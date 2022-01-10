<?php
    // Tạo SESSION
    session_start();
    if(isset($_POST['btn'])){
        $firstNam = $_POST['fname'];
        $lastName  = $_POST['Lname'];
        $email =  $_POST['email'];
        $password = $_POST['pass'];
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','db_gmail');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        //Kiểm tra email
        $check = "SELECT * FROM tb_user WHERE email = '$email'";
        $resultcheck = mysqli_query($conn,$check);
        if(mysqli_num_rows($resultcheck) > 0){
            $error = "Địa chỉ email này đã được đăng ký !";
            header("location: SignIn.php?error=$error"); }  //Chuyển hướng, hiển thị thông báo lỗi
        else{
                // ?$pass_md5 = md5 ($pass1);
                // $pass_hash = password_hash ($pass1, PASSWORD_DEFAULT);
                        
                $sql = "INSERT INTO tb_user VALUES (NULL, '$firstNam', '$lastName', '$email', '$password')";
                $result = mysqli_query($conn,$sql);
                if ($result) { 
                    $success = "Đăng ký thành công !";
                    header("location:SignIn.php?success=$success");  }
                else {
                    $error2 = "Đã xảy ra lỗi !";
                    header("location:SignIn.php?error=$error2");  }
                // Bước 03: Đóng kết nối
                mysqli_close($conn);
            }

} else{
        header("location:register.php");
    }
?>