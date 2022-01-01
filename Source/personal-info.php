<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <div class="icons">
                    <button id="header-menu" class="btn header-menu tooltip" data-info="Main menu">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <a href="index.php" class="header-logo">
                    <img src="images/logo-google.png" alt="Google_Logo" style="width: 55%;">
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
                            <a href="#">Something in here</a>
                            <a href="#">Something in here</a>
                            <a href="#">Something in here</a>
                        </div>
                    </div>
                </div>

            </div>

        </header>

    </div>
</body>

</html>