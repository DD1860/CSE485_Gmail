<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();
    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
    $email = $_POST['txtEmail'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','db_gmail');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM tb_user WHERE email = '$email'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['email2'] = $email;
            header("location: SignUpPassWord.php"); //Chuyển hướng sang form nhập pasowrd
        }else{
            $error = "Không tìm thấy Tài khoản Google của bạn.";
            header("location: SignUp.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>