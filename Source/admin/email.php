<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/admin.css" />
  <title>Admin Gmail Dashboard</title>
</head>

<body>
<?php 
include_once 'index.php';

?>
  <main class="containers">
    <div class="container">
        <h5 class="text-center text-primary">DANH SACH NGUOI DUNG</h5>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
</body>

</html>