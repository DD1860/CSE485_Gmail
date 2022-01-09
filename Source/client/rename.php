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
    <title>Đổi tên</title>

</head>

<body>
    <div class="container">
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
    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                <label for="floatingInputGrid">Họ</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                <label for="floatingInputGrid">Tên</label>
            </div>
        </div>
    </div>
    </div>
</body>

</html>