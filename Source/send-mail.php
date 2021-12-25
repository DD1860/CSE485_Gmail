<?php
    session_start();
    if(isset($_POST['submit'])){ 
    $to_user = $_POST['to_user'];
    $subject = $_POST['subject'];
    $text = $_POST['content-text'];
    // $to_user =  '" . mysql_real_escape_string($pass)."';
    // $to_user = isset($_POST['to_user'])?(string)(int)$_POST['to_user']:false;
    // $subject = isset($_POST['subject'])?(string)(int)$_POST['subject']:false;
    // $text = isset($_POST['content-text'])?(string)(int)$_POST['content-text']:false;
    
    $conn = mysqli_connect('localhost','root','','db_gmail');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $id =  $_SESSION['id'];
    $sql = "INSERT INTO tb_mail VALUES (NULL, '$id','$to_user','$subject','$text','123456')";
    $ketqua = mysqli_query($conn,$sql);
    if(!$ketqua){
        $error = " Gửi tin nhắn thất bại ";
        header("location: index.php?error=$error"); 
    }else{
        $success = "Gửi tin nhắn thất bại";
        header("location: index.php?success=$success"); 
    }
    mysqli_close($conn);
} else {
    header("location:index.php");
}

?>