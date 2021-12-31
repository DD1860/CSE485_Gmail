<?php
session_start();
    $delete = $_GET['token'];
    $conn = mysqli_connect('localhost','root','','db_gmail');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $number = mysqli_query($conn,"DELETE FROM tb_mail WHERE to_user = '{$_SESSION['id']}' AND ID = '$delete'");
     if($number > 0){
        header("location: index.php"); //Chuyển hướng về Trang quản trị
     }else{
         header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
     }
    mysqli_close($conn);
?>