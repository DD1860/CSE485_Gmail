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
    <link rel="icon" type="image/png" href="/CSE485_Gmail/Source/images/favicon-gmail.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hộp thư đến - @username - Gmail</title>
    <link rel="icon" type="image/png" href="images/favicon-gmail.png">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/reset.css">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/properties.css">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/style.css">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/general.css">
    <!-- Setup using Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <?php include 'template/header.php'; ?>
        <!-- Sidebar-left -->
        <?php include 'template/left-sidebar.php'; ?>
        <!-- BODY -->
        <section class="inbox">
            <div class="message-comming">
                <div class="inbox-menu">
                    <div class="inbox-menu-group">
                        <div class="inbox-btn-group">
                            <a href="index.php" style="text-decoration:none;">
                                <button class="btn">
                                    <span class="material-icons">
                                        west
                                    </span>
                                </button>
                            </a>
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
                                1-50 trong số <?php
                                                $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                                                $result = mysqli_query($conn, "SELECT count(ID) AS number FROM tb_mail WHERE to_user = '{$_SESSION['id']}' ");
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
                <!-- Xử lý cơ sở dữ liệu hiển thị tin nhắn đến theo token ( ID ) -->
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                mysqli_set_charset($conn, 'UTF8');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                $token = $_GET['token'];
                $result = mysqli_query($conn, "SELECT * FROM tb_mail WHERE to_user = '{$_SESSION['id']}' AND ID = $token ");
                $row = mysqli_fetch_assoc($result);
                $check_name_sent = mysqli_query($conn, "SELECT * FROM tb_user WHERE ID = '{$row['from_user']}'");
                $row2 = mysqli_fetch_assoc($check_name_sent);
                $name_sent = " " . $row2["firstName"] . " " . $row2["lastName"] . " ";
                $email_sent = "" . $row2["email"] . "";
                // lấy avatar người gửi
                $result2 = mysqli_query($conn, "SELECT link FROM tb_uploads WHERE user_id = '{$row['from_user']}' ORDER BY id DESC");
                if (mysqli_num_rows($result2) > 0) {
                    $row_avatar = mysqli_fetch_assoc($result2);
                    $avatar = "" . $row_avatar["link"] . "";
                } else {
                    $avatar = "avatar.png";
                }
                ?>
                <div class="auto-flow">
                    <div class="details-subject">
                        <?php
                        echo $row['subject'];
                        ?>
                        <br> <br>
                    </div>

                    <div class="info-inbox">
                        <div class="icons">
                            <img src="client/uploads/<?php echo $avatar ?>" class="avatar-profile" style="border-radius:999px;width:36px;height:36px;">
                        </div>
                        <div class="user-name" style="font-weight:bold">
                            <?php
                            echo $name_sent;
                            ?>
                        </div>

                    </div>

                    <div class="inbox-content">
                        <p><?php
                            echo $row['text']; // hiện text
                            ?></p>
                        <br> <br>

                        <!-- button trả lời & chuyển tiếp -->
                        <a href="#" class="reply" id="popup-btn-reply">Trả lời</a>
                        <a href="#" class="reply" id="popup-btn-forward">Chuyển tiếp</a>

                    </div>
                </div>
                <!-- popup compose gmail -->

                <form class="send_email" action="send-mail.php" method="post">
                    <div class="popup-reply">
                        <div class="popup-content">
                            <div class="popup-head">
                                <span class="close-btn-reply">&times;</span>
                                <p>Trả lời tin nhắn</p>
                            </div>
                            <div class="send-to">
                                <input type="email" name="to_user" placeholder="Người nhận" value="<?php echo $email_sent ?>" required>
                            </div>

                            <div class="send-to subject">
                                <input type="text" name="subject" placeholder="Chủ đề" value="[ Reply ] <?php echo $row['subject'] ?>" required>
                            </div>
                            <button type="submit" name="sendmail" class="btn-send">Gửi</button>
                            <?php
                            if (isset($_GET['success'])) {
                                echo "<script>alert('Tin nhắn đã được gửi đi thành công !');</script>";
                            }

                            ?>
                            <textarea class="text-message" style="resize:none" name="content-text" cols="24" rows="4"></textarea>
                        </div>
                    </div>
                </form>

            <!-- Form forward -->
            <form class="send_email" action="send-mail.php" method="post">
                    <div class="popup-forward">
                        <div class="popup-content">
                            <div class="popup-head">
                                <span class="close-btn-forward">&times;</span>
                                <p>Chuyển tiếp tin nhắn</p>
                            </div>
                            <div class="send-to">
                                <input type="email" name="to_user" placeholder="Người nhận" required>
                            </div>

                            <div class="send-to subject">
                                <input type="text" name="subject" placeholder="Chủ đề" value="<?php echo $row['subject'] ?>" required>
                            </div>
                            <button type="submit" name="sendmail" class="btn-send">Gửi</button>
                            <?php
                            if (isset($_GET['success'])) {
                                echo "<script>alert('Tin nhắn đã được gửi đi thành công !');</script>";
                            }

                            ?>
                            <textarea class="text-message" style="resize:none" name="content-text" cols="24" rows="4"><?php echo $row['text'] ?></textarea>
                        </div>
                    </div>
                </form>
        </section>
        <!-- RIGHT SIDEBAR -->
        <?php include 'template/right-sidebar.php'; ?>
    </div>
    </div>
    <!-- Script -->
    <script type="text/javascript">
        function click_show_more() {
            var x = document.getElementById('show-more');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        let btn_popup_reply = document.getElementById("popup-btn-reply");
        let popup_reply = document.querySelector(".popup-reply");
        let close_btn_reply = document.querySelector(".close-btn-reply");
        // Hiển thị popup khi nhấp chuột vào button
        btn_popup_reply.onclick = function() {
            popup_reply.style.display = "block"
        }
        // Đóng popup khi ấn vào nút đóng
        close_btn_reply.onclick = function() {
            popup_reply.style.display = "none"
        }

        let btnpopupforward = document.getElementById("popup-btn-forward");
        let popupforward = document.querySelector(".popup-forward");
        let closeBtnforward = document.querySelector(".close-btn-forward");
        // Hiển thị popup khi nhấp chuột vào button
        btnpopupforward.onclick = function() {
            popupforward.style.display = "block"
        }
        // Đóng popup khi ấn vào nút đóng
        closeBtnforward.onclick = function() {
            popupforward.style.display = "none"
        }
    </script>
</body>

</html>