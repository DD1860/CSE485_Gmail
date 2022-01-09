<?php

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_gmail');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM tb_user WHERE ID = '$ID'";

    $number = mysqli_query($conn,$sql);

    if($number  > 0){
        header("location: index.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>