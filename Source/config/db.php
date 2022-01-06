<?php
$namehost = 'localhost';
$userhost = 'root';
$passhost = '';
$database = 'db_gmail';
// Lệnh kết nối tới database
$conn = mysqli_connect($namehost, $userhost, $passhost, $database);
// Nếu kết nối database thất bại sẽ báo lỗi
if (!$conn) {
    echo 'Kết nối tới database thất bại !';
}
