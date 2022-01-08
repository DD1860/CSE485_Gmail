<?php
include('config/general.php');
    session_start();
    if(isset($_POST['sendmail'])){ 
        $conn = mysqli_connect('localhost','root','','db_gmail');
        mysqli_set_charset($conn, 'UTF8');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        $to_user = $_POST['to_user']; // biến nhận là email // daiduc@gmail.com
        $sql = "SELECT * FROM tb_user WHERE email = '$to_user'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id =  $_SESSION['id']; // $id ở đây lúc này chính là from_user vì ID người gửi= ID người dùng đăng nhập 
            $subject = $_POST['subject'];
            $text = mysqli_real_escape_string($conn, $_POST['content-text']);
            $sql = "INSERT INTO tb_mail VALUES (NULL, '$id','{$row['ID']}','$subject','$text','$date_current')";
            $ketqua = mysqli_query($conn,$sql);
            if(!$ketqua){
                $error = " Gửi tin nhắn thất bại ";
                header("location: index.php?error=$error"); 
            }else{
                $success = "Gửi tin nhắn thành công";
                header("location: index.php?success=$success"); 
            }
        } else{
            $error = "Tài khoản người nhận không tồn tại!";
            header("location: index.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
     } 
     else{
         header("location:index.php");
     }
    ?>