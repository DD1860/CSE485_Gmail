<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<header class="header">

    <div class="header-left">
        <div class="icons">
            <button id="header-menu" class="btn header-menu tooltip" data-info="Main menu">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <a href="index.php" class="header-logo">
            <img src="images/logo_gmail.png" alt="Gmail_Logo">
        </a>
    </div>

    <form class="header-middle" action="search.php">
        <div class="icons">
            <button id="js-header-search" class="btn tooltip" data-info="Search">
                <span class="material-icons">search</span>
            </button>
        </div>
        <input type="search" class="header-middle-input" name="search" placeholder="Tìm kiếm trong thư">
        <div class="icons">
            <button id="js-header-middle" class="btn tooltip" data-info="Search">
                <span class="material-icons">clear</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-middle-options" class="btn tooltip" data-info="Options">
                <span class="material-icons">tune</span>
            </button>
        </div>
    </form>


    <div class="header-right">
        <div class="dropdown">
            <div class="icons">
                <button id="header-support" class="btn">
                    <span class="material-icons">help_outline</span>
                </button>
                <div class="dropdown-content-help" style="font-size:14px">

                    <p style="color:dimgray; margin:0%">Trợ giúp</p>
                    <p style="color:dimgray;margin:0%">Đào tạo</p>
                    <p style="color:dimgray;margin:0%">Nội dung cập nhật</p>
                    <hr style="opacity:0.2">
                    <p style="color:dimgray;margin:0%">Gửi ý kiến phản hồi cho Google</p>

                </div>
            </div>
        </div>
        <!-- thay đổi giao diện -->
        <div class="dropdown">
            <div class="icons">
                <button id="header-settings" class="btn" data-info="Settings">
                    <span class="material-icons">settings</span>
                </button>
                <div class="dropdown-content-help">
                    <center> CÀI ĐẶT GIAO DIỆN
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle" id="light-dark">
                    </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- . -->
        <?php
        require_once "config/db.php";
        $result = mysqli_query($conn, "SELECT link FROM tb_uploads WHERE user_id = '{$_SESSION['id']}' ORDER BY id DESC");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $avatar = "" . $row["link"] . "";
        } else {
            $avatar = "avatar.png";
        }
        ?>
        <div class="dropdown">
            <div class="icons">
                <button id="header-apps" class="btn">
                    <span class="material-icons">apps</span>
                </button>
                <div class="dropdown-content">
                    <img src="client/uploads/<?php echo $avatar ?>" style=" border-radius:999px;width:64px; height: 64px; margin:10px;">
                    <img src="images/Gmail-none.png" alt="" style=" width:25%; height: 25%px;  margin:10px;">
                    <img src="images/dich.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/drive.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/google.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/lophoc.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/meet.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/tintuc.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/trochuyen.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/youtube.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/anh.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                    <img src="images/danhba.png" alt="" style=" width:15%; height: 15%;  margin:10px;">
                </div>
            </div>
        </div>
        <!-- đăng xuất tài khoản -->
        <div class="dropdown">
            <div class="icons">
                <button id="header-profile" class="btn tooltip">
                    <img src="client/uploads/<?php echo $avatar ?>" class="btn-icon header-profile">
                </button>
                <div class="dropdown-content">
                    <img src="client/uploads/<?php echo $avatar ?>" alt="avatar" class="avatar" style="margin-top:10px;"><br>
                    <div class="name-header" style="font-size:16px;font-weight:500"><?php
                    echo "  " . $_SESSION['name'] . "    ";
                    ?></div>
                    <div class="email-header" style="font-size:14px; color:var(--gray);"><?php
                    echo "  " . $_SESSION['isLoginOK'] . "    ";
                    ?></div>
                     <a href="personal-info.php"><button style="cursor: pointer;border-radius: 20px; font-size: 15px; border: none; padding : 9px ;background: white;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">Quản lý Tài khoản Google của bạn</button><br></a>
                    <button style="border: none; background-color:white">
                        <a href="SignUp.php" target="_blank"><i class="bi bi-person-plus" style="color:dimgray"> Thêm một tài khoản khác</i></a>
                        <a href="process-logout.php"><button type="submit" style="border:none;background:white;padding:10px; border-radius: 10px;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">Đăng xuất</button></a>
                        <hr style="opacity:0.2">
                        <div class="footer-text-sm">
                            <a href="https://policies.google.com/privacy?hl=vi&authuser=0">Chính sách quyền riêng tư</a>
                            <a href="https://myaccount.google.com/termsofservice?hl=vi&authuser=0"> Điều khoản dịch vụ</a>
                        </div>
                </div>
            </div>
        </div>
        <script>
            var checkbox_toggle = document.getElementById('light-dark');
            checkbox_toggle.addEventListener('change', function() {
                // THêm class dark cho body
                document.body.classList.toggle('dark');
            });
        </script>
</header>
<!-- CSS Header -->
<style>
    .dropdown {
        position: relative;
        display: inline-block;

    }

    .dropdown-content {
        background-color: white;
        display: none;
        position: absolute;
        min-width: 300px;
        min-height: 420px;
        box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        right: 10px;
        text-align: center;
        border-radius: 10px;
        line-height: 48px;
        font-size: 20px;
    }

    .dropdown-content-help {
        background-color: white;
        display: none;
        position: absolute;
        width: 250px;
        height: 185px;
        box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        right: 10px;
        border-radius: 10px;
        line-height: 35px;
        font-size: 14px;
        padding-left : 15px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropdown-content-help {
        display: block;
    }

    .dropdown-content a {
        color: black;
        text-decoration: none;
        display: block;
    }

    .avatar {
        width: 80px;
        height: 80px;
        border-radius: 999px;
    }

    .header {
        display: grid;
        grid-template-columns: 256px 1fr min-content;
        justify-content: space-between;
        align-items: center;
        grid-column-gap: 12px;
        height: 64px;
        padding: 0.15rem;
        background-color: white;
        border-bottom: 1px solid var(--fill-border);
        grid-column: 1 / 4;
    }

    .header-left {
        display: flex;
        align-items: center;
        margin: 0 6px;
    }

    .header-middle {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 48px;
        max-width: 720px;
        background-color: var(--fill-grey);
        border-radius: 8px;
        padding: 3px 8px;
        transition: box-shadow 350ms ease;
    }

    .header-middle:focus-within {
        background-color: white;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.302), 0 1px 3px 1px rgba(60, 64, 67, 0.149);

    }

    input[type="search"]::-webkit-search-cancel-button {
        appearance: none;
    }

    .header-middle-input {
        display: block;
        font-family: var(--font);
        font-size: 15px;
        font-weight: 50;
        background-color: transparent;
        width: 100%;
        padding: 4px;
        border: none;
        outline: none;
    }

    .header-middle:focus-within .btn[type="reset"] {
        display: flex;
    }

    #header-profile {
        height: 42px;
        width: 42px;
    }

    .header-profile {
        height: 32px;
        width: 32px;
        opacity: 1;
    }

    #header-menu {
        width: 48px;
        height: 48px;
        margin: 4px;
    }

    .header-right {
        display: flex;
        align-items: center;
        margin: 0 6px;
    }

    :root {
        --transition-effect: 0.25s cubic-bezier(.25, -0.59, .82, 1.66) .3s;
    }

    body {
        background: #fff;
        transition: var(--transition-effect);
    }

    body.dark {
        background: #9C9C9C;
    }

    #wrapper {
        margin-top: 10px;
        justify-content: center;
        align-items: center;
        min-height: 30vh;

    }

    .switch-toggle {
        width: 70px;
        height: 40px;
        appearance: none;
        background: #F5F5F5;
        border-radius: 26px;
        position: relative;
        cursor: pointer;
        box-shadow: inset 0px 0px 16px rgba(0, 0, 0, .3);
        transition: var(--transition-effect);

    }

    .switch-toggle::before {
        content: "";
        width: 33px;
        height: 33px;
        position: absolute;
        top: 3px;
        left: 3px;
        background: #FFFFFF;
        border-radius: 50%;
        box-shadow: 0px 0px 6px rgba(0, 0, 0, .3);
        transition: var(--transition-effect);

    }

    .switch-toggle:checked {
        background: #9C9C9C;
    }

    .switch-toggle:checked:before {
        left: 33px;
    }
</style>