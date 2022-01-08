<?php
// Kết nối với file db.php
include('connectdb.php');
// Lấy múi giờ chung cho toàn bộ trang
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date("Y-m-d H:i:sa");
?>