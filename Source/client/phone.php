<?php
// Kiểm tra thẻ người dùng, mở session
session_start();
if (!isset($_SESSION['isLoginOK'])) {
    header("location:SignIn.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/reset.css">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/properties.css">
    <link rel="stylesheet" href="/CSE485_Gmail/Source/css/personal-info.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chỉnh sửa số điện thoại</title>

</head>

<body>
    <header class="header">

        <div class="header-left">
            <a href="index.php" class="header-logo">
                <img src="/CSE485_Gmail/Source/images/logo-google.png" alt="Google_Logo" style="width: 42%; margin-left:25px;">
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

            <div class="icons">
                <button id="header-apps" class="btn">
                    <img src="/CSE485_Gmail/Source/client/uploads/avatar.png" class="btn-icon header-profile">
                </button>
            </div>

        </div>

    </header>
    <br><br>
    <center>
        <h5>Thêm / Sửa số điện thoại</h5>
    </center>
    <hr>
    <div class="container" style="max-width:50%">
        Số điện này sẽ được thêm vào Tài khoản Google của bạn. <br><br>
        <div class="box-form" style="padding:32px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
            <form class="form-floating" action="process-phone.php" method="post">
                <input type="text" class="form-control" name="numberphone" id="floatingInputValue">
                <label for="floatingInputValue">Phone number</label>
                <br>
                <span>
                    Bạn có thể đã thêm các số điện thoại không có trong danh sách này. Nếu một số điện thoại bạn đã thêm vào một dịch vụ của Google không có ở đây, hãy truy cập dịch vụ đó để kiểm soát cách số đó được sử dụng.
                    <br> Tìm hiểu thêm</span><br><br>
                <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                <a href="/CSE485_Gmail/Source/personal-info.php"><button type="button" class="btn btn-light">Hủy</button></a>
            </form>
        </div>
    </div>

</body>

</html>