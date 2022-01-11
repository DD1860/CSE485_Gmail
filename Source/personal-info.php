<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/CSE485_Gmail/Source/images/favicon-gmail.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/properties.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/personal-info.css">
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Personal Infomation</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="container">
        <header class="header">

            <div class="header-left">
                <a href="index.php" class="header-logo">
                    <img src="images/logo-google.png" alt="Google_Logo" style="width: 42%; margin-left:25px;">
                </a>
            </div>

            <form class="header-middle">
                <div class="icons">
                    <button id="js-header-search" class="btn tooltip" data-info="Search">
                        <span class="material-icons">search</span>
                    </button>
                </div>
                <input type="search" class="header-middle-input" name="search" placeholder="Tìm kiếm trong tài khoản">

            </form>

            <div class="header-right">
                <div class="icons">
                    <button id="header-support" class="btn">
                        <span class="material-icons">help_outline</span>
                    </button>
                </div>
                <div class="icons">
                    <button id="header-apps" class="btn">
                        <span class="material-icons">apps</span>
                    </button>
                </div>
            </div>

        </header>
        <section class="left-sidebar" style="margin-top:25px">

            <div class="left-siderbar-label">
                <ul class="category-item-list" style="height: 275px;">
                    <li class="category-item" style="background: #e8f0fe;">
                        <a href="personal-info.php">
                            <div>
                                <img src="images/icon/person2.png">
                                <span class="left-sidebar-icon">Trang chủ</span>
                            </div>
                        </a>
                    </li>

                    <li class="category-item">
                        <a href="personal-info.php">
                            <div>
                                <img src="images/icon/personalinfo.png">
                                <span class="left-sidebar-icon">Thông tin cá nhân</span>
                            </div>
                        </a>

                    </li>

                    <li class="category-item">
                        <div>
                            <img src="images/icon/personalization.png">
                            <span class="left-sidebar-icon">Dữ liệu và quyền riêng tư</span>
                        </div>
                        <span class="category-item-number"></span>
                    </li>

                    <li class="category-item">
                        <div>
                            <img src="images/icon/send.png">
                            <span class="left-sidebar-icon">Bảo mật</span>
                        </div>
                    </li>

                    <li class="category-item">
                        <div>
                            <img src="images/icon/people_and_sharing.png">
                            <span class="left-sidebar-icon">Mọi người và chia sẻ</span>
                        </div>
                    </li>
                    <li class="category-item">
                        <div>
                            <img src="images/icon/file.png">
                            <span class="left-sidebar-icon">Thanh toán và nhật ký</span>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="left-sidebar-connect">

                <div class="connect">


                    <li class="category-item">
                        <div>
                            <img src="images/icon/info.png">
                            <span class="left-sidebar-icon">Giới thiệu</span>
                        </div>
                    </li>

                </div>

            </div>
        </section>
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
        <?php
        $check_tb_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE ID = '{$_SESSION['id']}' " );
        $row = mysqli_fetch_assoc($check_tb_user);
        ?>
        <section class="inbox">
            <div class="title">
                <h1>Thông tin cá nhân</h1>
                <center><img src="client/uploads/<?php echo $avatar ?>" style="margin:15px; height:120px;width:120px;border-radius:999px;"></center>
            </div>
            <div class="info-user">
                <span style="font-weight:bold">Thông tin cơ bản</span><br><br>
                <i>Một số thông tin có thể hiển thị cho những người khác đang sử dụng dịch vụ của Google.</i><br><br>
               <span> Tên tài khoản : <?php
                                        echo "" . $_SESSION['name'] . ""; ?> 
                </span> <a href="client/rename.php"> <span class="material-icons" style="color:black">
                                    keyboard_arrow_right
                                </span> </a><br><br>
                <span> Email : <?php echo "" . $_SESSION['isLoginOK'] . ""; ?> </span>
                <br><br>
                <span> Giới tính : <?php echo  $row['gioitinh'] ?> </span><a href="client/gender.php"> <span class="material-icons" style="color:black">
                                    keyboard_arrow_right
                                </span> </a>
                <br><br>
                <span> Số điện thoại : <?php echo $row['phone'] ?> </span><a href="client/phone.php"> <span class="material-icons" style="color:black">
                                    keyboard_arrow_right
                                </span> </a>
                <br>
            </div>

        </section>

    </div>



</body>

</html>