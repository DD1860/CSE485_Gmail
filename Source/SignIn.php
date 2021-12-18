<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp-Gmail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style_signup.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="signup-form">
					<form action="" class="mt-5 border p-4 bg-light shadow form">
					<img class="logo" src="images/Googlelogo.png" alt="">
						<h4 class="mb-5 text-secondary">Tạo tài khoản Google</h4>
						<div class="row">
							<div class="mb-3 col-md-6">
								<input type="text" name="fname" class="form-control" placeholder="Họ">
							</div>
							<div class="mb-3 col-md-6">
								<input type="text" name="Lname" class="form-control" placeholder="Tên">
							</div>
							<div class="mb-3 col-md-12">
						         <input type="email" class="form-control" placeholder="Email của bạn" required name="">
							</div>
							<div class="mb-3 col-md-12">
								<span class="t">Bạn có thể sử dụng chữ cái, số và dấu chấm</span>
							</div>
							<div class="mb-3 col-md-6">
								<input type="email" name="password" class="form-control" placeholder="Mật khẩu">
							</div>
							<div class="mb-3 col-md-6">
								<input type="password" name="confirmpassword" class="form-control" placeholder="Xác nhận">
							</div>
							<div class="mb-3 col-md-12">
								<span class="t">Sử dụng 8 kí tự trở lên và kết hợp chữ cái, chữ số và biểu tượng</span>
							</div>
							<div class="col-md-6">
							   <a href="">Đăng nhập</a>
							</div>
							<div class="col-md-6">
								<form action="http://www.google.com/">
								<button class="btn register">Tiếp tục</button>
							</form>
							 </div>
						</div>
					</form>
					
				</div>
			</div>
			<div id="div2">
				<ul>
					<li>
						<label>Vietname</label>
						<select name="languages" id="">
							<option value="">Vietname</option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
						</select>
					</li>
					<li><a id="a4" href="#">Trợ giúp</a></li>
					<li><a id="a4" href="#">Bảo mật</a></li>
					<li><a id="a4" href="#">Điều khoản</a></li>
				</ul>
			</div>
		</div>
	</div>
	

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>