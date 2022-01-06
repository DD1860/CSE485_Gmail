<?php
include('config/general.php');
    session_start();
    if(isset($_POST['sendmail'])){ 
    $to_user = $_POST['to_user'];
    $conn = mysqli_connect('localhost','root','','db_gmail');
    mysqli_set_charset($conn, 'UTF8');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $id =  $_SESSION['id'];
    $subject = $_POST['subject'];
    $text = mysqli_real_escape_string($conn, $_POST['content-text']);
    $sql = "INSERT INTO tb_mail VALUES (NULL, '$id','$to_user','$subject','$text','$date_current')";
    $ketqua = mysqli_query($conn,$sql);
    if(!$ketqua){
        $error = " Gửi tin nhắn thất bại ";
        header("location: index.php?error=$error"); 
    }else{
        $success = "Gửi tin nhắn thành công";
        header("location: index.php?success=$success"); 
    }
    mysqli_close($conn);
} else {
    header("location:index.php");
}

?>