<?php
session_start();
if (!isset( $_SESSION['adminlogin'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="/CSE485_Gmail/Source/images/favicon-gmail.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/admin.css" />
  <title>Admin Gmail Dashboard</title>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
     
      <a class="navbar-brand me-auto ms-lg-0 ms-3l lead  " href="index.php">
      <img src="img/logo-gmail-2.png" alt=""width="30px" height="30px">
        Admin Gmail
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
        aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <a class="nav-link  ms-2" href="login.php" aria-expanded="false" <li> <i class="bi bi-person-fill"></i>Logout</li>
          </a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <a href="index.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="process-user.php">
              <span class="me-2"><i class="bi bi-people"></i></i></span>
              <span>User</span>
            </a>
          </li>
          <li>
            <a href="email.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>In box</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Addons
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Charts</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Tables</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <main class="containers">
    <div class="container">
        <h5 class="text-center text-primary"></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">fromUser</th>
                    <th scope="col">toUser</th>
                    <th scope="col">subject</th>
                    <th scope="col">text</th>
                    <th scope="col">time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','db_gmail');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM tb_mail";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['ID']; ?></th>
                                <td><?php echo $row['from_user']; ?></td>
                                <td><?php echo $row['to_user']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['text']; ?></td>
                                <td><?php echo $row['time']; ?></td>
                                
                            </tr>
                <?php
                        }
                    }
                ?>
                
                
            </tbody>
            </table>
    </div>    
  </main>
  <!-- offcanvas -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
</body>
</html>