<?php
    session_start();
    include_once("db.php");
if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    } else {
        header("location:error.php");
    }
    $sql = "UPDATE tb_user SET gioitinh = '$gender' WHERE ID = '{$_SESSION['id']}' ";
    $result = mysqli_query($conn,$sql);
         if ($result) { 
            $success = "Cập nhật thành công !";
            header("location:gender.php?success=$success");  }
        else {
            $error2 = "Đã xảy ra lỗi !";
            header("location:gender.php?error=$error2");  }
        // Bước 03: Đóng kết nối
        mysqli_close($conn); 
?>