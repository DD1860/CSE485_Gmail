<?php require_once "process-login.php"; ?>
<?php
$emailafter = $_SESSION['email2'];
if (isset($_POST['btnSignIn2'])) {
    $pass  = $_POST['txtPass'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
    mysqli_set_charset($conn, 'UTF8');
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM tb_user WHERE email = '$emailafter' AND password ='$pass'";
    // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // CẤP THẺ LÀM VIỆC
        $_SESSION['isLoginOK'] = $emailafter;
        $checkname = mysqli_query($conn, "SELECT firstName, lastName FROM tb_user WHERE email = '$emailafter' " );
        $row = mysqli_fetch_assoc($checkname);
        $name = " " . $row["firstName"] . " " . $row["lastName"] . " ";
        $_SESSION['name'] = $name;
        header("location: index.php"); //Chuyển hướng sang index
    } else {
        $error = "Mật khẩu không chính xác. Hãy thử lại hoặc nhấp vào ''Bạn quên mật khẩu'' để đặt lại mật khẩu.";
        header("location: SignUpPassWord.php?error=$error");
        //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
} else {
    header("location:SignUp.php");
}
?>