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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Personal Infomation</title>
</head>

<body>
    <div class="container">
        <header class="header">

            <div class="header-left">
                <a href="personal-info.php" class="header-logo">
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
                <div class="dropdown">
                    <div class="icons">
                        <button id="header-profile" class="btn tooltip">
                            <img src="images/avatar.png" class="btn-icon header-profile">
                        </button>
                        <div class="dropdown-content">
                            <img src="images/avatar.png" class="avatar">
                            <a href="#">Something in here</a>
                            <a href="#">Something in here</a>
                            <a href="#">Something in here</a>
                        </div>
                    </div>
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
        <section class="inbox">
            <div class="title">
                <h1>Thông tin cá nhân</h1>
            </div>

        </section>

    </div>
</body>

</html>