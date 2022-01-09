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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Đổi giới tính</title>

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
<br><br><center><h5>Thay đổi giới tính</h5></center>
<hr>
<div class="container" style="max-width:50%">
Hệ thống có thể dựa vào giới tính để mang đến trải nghiệm phù hợp với bạn trên các dịch vụ của Google, bao gồm cả cách chúng tôi xưng hô với bạn. <br>Tìm hiểu thêm <br><br>
<div class="box-form" style="padding:32px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
<br>
<form class="row g-3 needs-validation" novalidate>

  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ngày</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Tháng</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="Select"></option>
      <option>Tháng 1</option>
      <option>Tháng 2</option>
      <option>Tháng 3</option>
      <option>Tháng 4</option>
      <option>Tháng 5</option>
      <option>Tháng 6</option>
      <option>Tháng 7</option>
      <option>Tháng 8</option>
      <option>Tháng 9</option>
      <option>Tháng 10</option>
      <option>Tháng 11</option>
      <option>Tháng 12</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid month.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Năm</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid year.
    </div>
  </div>
  <br>
<h6>Chọn những người có thể thấy giới tính của bạn</h6>
<br>
<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1"><i class="bi bi-file-lock2"></i>  Chỉ mình bạn</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2"><i class="bi bi-people"></i>  Bất kỳ ai</label>

</div>
<br><br>
Mọi người có thể thấy thông tin này khi họ liên hệ với bạn hoặc xem nội dung bạn tạo trong các dịch vụ của Google. Tìm hiểu thêm
<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Hiển thị cả năm sinh cho những người có thể thấy ngày sinh của bạn
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
    <a href="/CSE485_Gmail/Source/personal-info.php"><button type="button" class="btn btn-light">Hủy</button></a>
  </div>
  
</form>


</div>
    </div>
</body>

</html>