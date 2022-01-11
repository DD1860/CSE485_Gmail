<?php
    session_start();
    include_once("db.php");

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $sql = "UPDATE tb_user SET firstName = ' $firstname' , lastName = ' $lastname' WHERE ID = '{$_SESSION['id']}' ";
        $result = mysqli_query($conn,$sql);
         if ($result) { 
            $success = "Đổi tên thành công !";
            header("location:rename.php?success=$success");  }
        else {
            $error2 = "Đã xảy ra lỗi !";
            header("location:rename.php?error=$error2");  }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);

} else {
        header("location:error.php");
    }
?>