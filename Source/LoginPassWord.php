<!DOCTYPE html>
<html>

<head>
  <title>SignUpPassWord</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/LoginPassWord.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
  <div id="div1">
    <img src="images/anh-google.png" alt="">
    <h4>Chào mừng</h4>
    <p>Hãy nhập mật khẩu của bạn</p>

      <div>
    <input class="input1" type="password" placeholder="Nhập mật khẩu của bạn" required><br>
    
    <div class="col-md-6" style="margin-bottom:15%;">
    <input type="checkbox" class="show-btn"> Hiển thị mật khẩu
</div>
    
    </div>

    <div class="row" style="margin-bottom: 30%;">
        <div class="col-md-5">
          <a style="text-decoration: none" href="https://accounts.google.com/signin/v2/challenge/pwd?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=2&TL=AM3QAYb0gbF4HwNPHM_Y6NA7f2yVIGqWscKDne9imQrM57QgDKq7_ySkWrZSbIlh&navigationDirection=forward">Quên mật khẩu?</a>
        </div>
        <div class="d-grid  col-4 mx-auto">
          <button type="button" class="btn btn-primary">Tiếp theo</button>
        </div>
      </div>
  </div>
  <div style="margin-left: 36.5%; font-size: 15px; width: 26%;">

    <!-- nav -->
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <select class="btn btn-default" id="language" name="language" requied style="font-size: 14px; width: 110px;">
          <option value="#">Tiếng Việt </option>
          <option value="#">English (United Kingdom)</option>
          <option value="#">English (United States)</option>
          <option value="#">Canada</option>
          <option value="#">France</option>
          <option value="#">Italiano</option>
          <option value="#">Chinese</option>
        </select>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 14px;  ">
          <li class="nav-item">
            <a class="nav-link active" href="https://support.google.com/accounts?hl=vi#topic=3382296" style="color: rgb(124, 121, 117);">Trợ giúp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://policies.google.com/privacy?gl=VN&hl=vi" style="color: rgb(124, 121, 117);">Bảo mật</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://policies.google.com/terms?gl=VN&hl=vi" style="color: rgb(124, 121, 117);">Điều khoản</a>
          </li>
        </ul>

      </div>
    </nav>
  </div>
  </div>
</body>

</html>