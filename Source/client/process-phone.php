    <?php
    session_start();
    include_once("db.php");

    if (isset($_POST['submit'])) {
        $numberphone = $_POST['numberphone'];
        if (!preg_match("/^[0-9]*$/",$numberphone)) {
            echo "Số điện thoại không hợp lệ.";
            exit();
        }
        $sql = "UPDATE tb_user SET phone = '$numberphone' WHERE ID = '{$_SESSION['id']}' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success = "Chỉnh sửa số điện thoại thành công !";
            header("location:phone.php?success=$success");
        } else {
            $error2 = "Đã xảy ra lỗi !";
            header("location:phone.php?error=$error2");
        }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    } else {
        header("location:error.php");
    }
    ?>