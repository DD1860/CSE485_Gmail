<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['btn'])){
    $firstNam = $_POST['fname'];
    $lastName = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_gmail');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO tb_user  VALUES (null,'$firstNam','$lastName','$email','$password')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    if(!mysqli_num_rows($ketqua)){
        header("location: error.php"); //Chuyển hướng lỗi
        $error ="Đăng kí không thành công";
    } else{
        header("location: SignIn.php"); //Chuyển hướng lại Trang Quản trị
        $success = "Đăng kí thành công";

    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
    
} else {
    header("location:signup.php");
}
?>