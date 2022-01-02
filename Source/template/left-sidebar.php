<section class="left-sidebar">
    <div class="left-sidebar-create" id="popup-btn">
        <button class="sidebar-btn-create">
            <img src="images/create.png" alt="create new email" class="sidebar-btn-create-icon">
            <span class="sidebar-btn-create-title">Soạn thư</span>
        </button>
    </div>
    <!-- popup compose gmail -->
    <form class="send_email" action="send-mail.php" method="post">
        <div class="popup">
            <div class="popup-content">
                <div class="popup-head">
                    <span class="close-btn">&times;</span>
                    <p>Thư mới</p>
                </div>
                <div class="send-to">
                    <input type="text" name="to_user" placeholder="Người nhận" required>
                </div>

                <div class="send-to subject">
                    <input type="text" name="subject" placeholder="Chủ đề" required>
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
    <div class="left-siderbar-label">
        <ul class="labels category-item-list">
            <li class="category-item active">
                <div>
                    <img src="images/icon/inbox.png" style="opacity: 1;">
                    <span class="left-sidebar-icon">Hộp thư đến</span>
                </div>
                <span class="category-item-number">
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'db_gmail');
                    $result = mysqli_query($conn,"SELECT count(ID) AS number FROM tb_mail WHERE to_user = '{$_SESSION['id']}' ");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['number'];
                    ?>
                </span>
            </li>

            <li class="category-item">
                <div>
                    <img src="images/icon/star.png">
                    <span class="left-sidebar-icon">Có gắn dấu sao</span>
                </div>
                <span class="category-item-number">4</span>
            </li>

            <li class="category-item">
                <div>
                    <img src="images/icon/watch_later.png">
                    <span class="left-sidebar-icon">Đã tạm ẩn</span>
                </div>
                <span class="category-item-number"></span>
            </li>

            <li class="category-item">
                <a href="sent.php">
                <div>
                    <img src="images/icon/send.png">
                    <span class="left-sidebar-icon">Đã gửi</span>
                </div>
                </a>
            </li>

            <li class="category-item">
                <div>
                    <img src="images/icon/file.png">
                    <span class="left-sidebar-icon">Thư nháp</span>
                </div>
            </li>

            <ul class="category-item category-item-sub" onclick="click_show_more()">
                <div>
                    <img src="images/icon/expand_more.png">
                    <span class="left-sidebar-icon">Danh sách mở rộng</span>
                </div>
            </ul>

            <div id="show-more" style="display:none">
                <li class="category-item">
                    <div>
                        <img src="images/icon/label_important.png">
                        <span class="left-sidebar-icon">Quan trọng</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/hangout.png">
                        <span class="left-sidebar-icon">Trò chuyện</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/schedule.png">
                        <span class="left-sidebar-icon">Đã lên lịch</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/mail.png">
                        <span class="left-sidebar-icon">Tất cả thư</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/report.png">
                        <span class="left-sidebar-icon">Thư rác</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/delete.png">
                        <span class="left-sidebar-icon">Thùng rác</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/label.png">
                        <span class="left-sidebar-icon">Danh mục</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/settings.png">
                        <span class="left-sidebar-icon">Quản lý nhãn</span>
                    </div>
                </li>
                <li class="category-item">
                    <div>
                        <img src="images/icon/plus.png">
                        <span class="left-sidebar-icon">Tạo nhãn mới</span>
                    </div>
                </li>
            </div>

        </ul>

    </div>
    <div class="left-sidebar-connect">

        <div class="connect">
            <div class="drag-btn-container">
                <button class="drag-btn"></button>
            </div>

            <span class="category-title">Meet</span>

            <li class="category-item">
                <div>
                    <img src="images/icon/videocam.png">
                    <span class="left-sidebar-icon">Cuộc họp mới</span>
                </div>
            </li>

            <li class="category-item">
                <div>
                    <img src="images/icon/keyboard.png">
                    <span class="left-sidebar-icon">Tham gia cuộc họp</span>
                </div>
            </li>

        </div>

        <div class="connect">
            <span class="category-title" style="margin-top: 20px;">Hangouts</span>
            <img class="category-img" src="images/avatar.png" alt="">
            <div class="dot-green"></div>
            <div class="user-name">
                <?php
                echo "  " . $_SESSION['name'] . "    ";
                ?>
            </div>
        </div>

        <div class="connect hangouts">
            <div class="text-hangout" style="margin-top:25px;"> Không có cuộc trò chuyện nào gần đây.
                <a href="#" class="connect-link" style="margin-top:7px; font-size:13px; text-align: center;">Bắt đầu một
                    cuộc trò chuyện mới</a>
            </div>

        </div>
    </div>
    <div class="left-sidebar-footer">

        <button class="btn">
            <img src="images/icon/person.png" class="btn-icon-sm">
        </button>

        <button class="btn">
            <img src="images/icon/hangout.png" class="btn-icon-sm active">
        </button>

    </div>
</section>
<!-- Javascrip compose popup -->
<script>
    let btnpopup = document.getElementById("popup-btn");
    let popup = document.querySelector(".popup");
    let closeBtn = document.querySelector(".close-btn");
    // Hiển thị popup khi nhấp chuột vào button
    btnpopup.onclick = function() {
        popup.style.display = "block"
    }
    // Đóng popup khi ấn vào nút đóng
    closeBtn.onclick = function() {
        popup.style.display = "none"
    }
</script>