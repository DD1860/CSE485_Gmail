<?php
// Trước khi cho người dùng xâm nhập vào bên trong
// Phải kiểm tra THẺ LÀM VIỆC
session_start();
if (!isset($_SESSION['isLoginOK'])) {
    header("location:SignUp.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hộp thư đến - @username - Gmail</title>
    <link rel="icon" type="image/png" href="images/favicon-gmail.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/properties.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/general.css">
    <!-- Setup using Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <?php include "template/header.php"; ?>
        <!-- Sidebar-left -->
        <?php include 'template/left-sidebar.php'; ?>
        <!-- BODY -->
        <section class="inbox">
            <div class="showhide" id="displayEmail">
                <!-- MAIL -->
                <div class="inbox-menu">
                    <div class="inbox-menu-group">
                        <div class="inbox-btn-group">
                            <button class="btn-alt">
                                <img src="images/icon/check_box_outline.png" alt="Select" class="btn-icon-sm">
                            </button>

                            <button class="btn-sm btn-alt">
                                <img src="images/icon/arrow_drop_down.png" alt="Select" class="btn-icon-sm">
                            </button>
                        </div>

                        <button class="btn">
                            <img src="images/icon/refresh.png" alt="Refresh" class="btn-icon-sm">
                        </button>

                        <button class="btn">
                            <img src="images/icon/more_vert.png" alt="More" class="btn-icon-sm">
                        </button>

                    </div>

                    <div class="inbox-menu-group">

                        <button class="btn-lg btn-alt">
                            <div class="inbox-menu-pagination">
                                1-<?php
                    $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                    $result = mysqli_query($conn,"SELECT count(ID) AS number FROM tb_mail WHERE to_user = '{$_SESSION['id']}' ");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['number'];
                    ?> trong số <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                    $result = mysqli_query($conn,"SELECT count(ID) AS number FROM tb_mail WHERE to_user = '{$_SESSION['id']}' ");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['number'];
                    ?>
                            </div>
                        </button>

                        <div class="inbox-menu-pagination-btn">
                            <button class="btn btn-pagination">
                                <span class="material-icons">
                                    keyboard_arrow_left
                                </span>
                            </button>

                            <button class="btn btn-pagination">
                                <span class="material-icons">
                                    keyboard_arrow_right
                                </span>
                            </button>
                        </div>

                        <div class="inbox-btn-group">
                            <button class="btn-alt">
                                <img src="images/icon/tool.png" alt="Input tools on/off" class="btn-icon-sm btn-icon-alt">
                            </button>

                            <button class="btn-sm btn-alt">
                                <img src="images/icon/arrow_drop_down.png" alt="Select input tool" class="btn-icon-sm btn-icon-alt">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="inbox-container">
                    <div class="inbox-category">
                        <div id="rows-main" class="inbox-category-item active">
                            <img src="images/icon/inbox.png" class="inbox-category-icon btn-icon-sm">
                            <span class="inbox-category-title">Chính</span>
                        </div>

                        <div class="inbox-category-item">
                            <img src="images/icon/people.png" class="inbox-category-icon btn-icon-sm">
                            <span class="inbox-category-title">Mạng xã hội</span>
                        </div>

                        <div class="inbox-category-item">
                            <img src="images/icon/local_offer.png" class="inbox-category-icon btn-icon-sm">
                            <span class="inbox-category-title">Quảng cáo</span>
                        </div>
                    </div>

                    <!-- MAIL CONTENT -->

                    <div class="content">
                        <div class="mail">


                            <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                            <?php
                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                            mysqli_set_charset($conn, 'UTF8');
                            if (!$conn) {
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $result = mysqli_query($conn, "SELECT * FROM tb_mail WHERE  to_user = '{$_SESSION['id']}' ");
                            // 
                            // $check_nguoigui = mysqli_query($conn, "SELECT firstName, lastName FROM tb_user WHERE ID = {from_id}  " );

                            // Bước 03: Xử lý kết quả truy vấn
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="inbox-message-item">
                                        <div class="checkbox" style="margin-right: -12px;">
                                            <button class="btn">
                                                <img src="images/icon/check_box_outline.png" alt="Select" class="message-btn-icon">
                                            </button>
                                        </div>

                                        <button class="btn star" style="margin: 0;">
                                            <img src="images/icon/star_black.png" alt="Not starred" class="message-btn-icon">
                                        </button>


                                        <!-- Message default ( unread ) -->

                                        <div class="message-default">
                                            <div class="message-sender message-content unread">
                                                <a href="inbox.php?token=<?php echo $row['ID']; ?>" style="color:black;text-decoration: none;">
                                                    <span>
                                                        <?php

                                                        echo $row['from_user'];
                                                        ?>

                                                    </span>
                                            </div>

                                            <div class="message-subject message-content unread">
                                                <span>
                                                    <?php echo $row['subject']; ?>
                                                </span>
                                            </div>
                                            </a>
                                            <div class="message-seperator message-content"> - </div>
                                            <div class="message-body message-content">
                                            <a href="inbox.php?token=<?php echo $row['ID']; ?>" style="color:black;text-decoration: none;">
                                                <span>
                                                    <?php echo $row['text']; ?>
                                                </span>
                                            </a>
                                            </div>
                                            <div class="space-mail message-content"></div>
                                            <div class="message-date center-text unread">
                                                <span>17:25 PM</span>
                                            </div>
                                        </div>
                                        <div class="message-group-hidden">
                                            <div class="inbox-message-item-options">
                                                <button class="btn">
                                                    <img src="images/icon/archive.png" alt="Archive" class="btn-icon-sm">
                                                </button>


                                                <!-- xóa tin nhắn  -->
                                                <button class="btn" onclick="location.href='delete-mail.php?token=<?php echo $row['ID']; ?>'">
                                                    <img src="images/icon/delete.png" alt="Delete" class="btn-icon-sm">
                                                </button>
                                                <button class="btn">
                                                    <img src="images/icon/drafts.png" alt="Mark as unread" class="btn-icon-sm">
                                                </button>
                                                <button class="btn">
                                                    <img src="images/icon/watch_later.png" alt="Snooze" class="btn-icon-sm">
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>



                            <!-- Message Read  -->
                            <div class="inbox-message-item  message-default-unread">
                                <div class="checkbox" style="margin-right: -12px;">
                                    <button class="btn">
                                        <img src="images/icon/check_box_outline.png" alt="Select" class="message-btn-icon">
                                    </button>
                                </div>

                                <button class="btn star" style="margin: 0;">
                                    <img src="images/icon/star_black.png" alt="Not starred" class="message-btn-icon">
                                </button>


                                <div class="message-default">
                                    <div class="message-sender message-content">
                                        <span>Stack Overflow</span>
                                    </div>
                                    <div class="message-subject message-content">
                                        <span>The Overflow #97: Code quality is everyone's concern</span>
                                    </div>
                                    <div class="message-seperator message-content"> - </div>
                                    <div class="message-body message-content">
                                        <span> Welcome to ISSUE #97 of The Overflow! This newsletter is by developers,
                                            for developers, written
                                            and curated by the Stack Overflow team and Cassidy Williams at Netlify. This
                                            week: why hooks changed
                                            the React game, how to preview a short link without clicking through, and
                                            politicians who think
                                            viewing source is being a hacker.</span>
                                    </div>
                                    <div class="space-mail message-content"></div>
                                    <div class="message-date center-text">
                                        <span>4:23 PM</span>
                                    </div>
                                </div>

                                <div class="message-group-hidden">
                                    <div class="inbox-message-item-options">
                                        <button class="btn">
                                            <img src="images/icon/archive.png" alt="Archive" class="btn-icon-sm">
                                        </button>
                                        <button class="btn">
                                            <img src="images/icon/delete.png" alt="Delete" class="btn-icon-sm">
                                        </button>
                                        <button class="btn">
                                            <img src="images/icon/mark_as_unread.png" alt="Mark as unread" class="btn-icon-sm">
                                        </button>
                                        <button class="btn">
                                            <img src="images/icon/watch_later.png" alt="Snooze" class="btn-icon-sm">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER -->
                        <?php include 'template/footer.php'; ?>
                    </div>
                </div>

            </div>
        </section>

        <!-- RIGHT SIDEBAR -->
        <?php include 'template/right-sidebar.php'; ?>
    </div>

    <!-- Script -->
    <script type="text/javascript">
        function click_show_more() {
            var x = document.getElementById('show-more');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
    </script>

</body>

</html>