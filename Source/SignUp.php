<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignIn-Gmail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/signin.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="signup-form">
					<form action="process_signup.php" class="mt-5 border p-4 bg-light shadow form" method="post">
					<img class="logo" src="images/Googlelogo.png" alt="">
						<h4 class="mb-5 text-secondary">Tạo tài khoản Google</h4>
						<div class="row">
							<div class="mb-3 col-md-6">
								<input type="text" name="fname" class="form-control" placeholder="Họ">
							</div>
							<div class="mb-3 col-md-6">
								<input type="text" name="Lname" class="form-control" placeholder="Tên">
							</div>
							<div class="mb-3 col-md-12 ">
						         <input type="email"  class="form-control" placeholder="Email của bạn" required name="email">
								 <!--<span id="gmail">@gmail.com</span>-->
								 <span class="t">Bạn có thể sử dụng chữ cái, số và dấu chấm</span>
							</div>
						
							<div class="mb-3 col-md-6">
							<div class="form-group">
				    	    <input type="password" class="form-control" placeholder="Mật khẩu" required name="pass" onkeyup='check();'/>
	                	     </div>
							</div>
							<div class="mb-3 col-md-6">
								<input type="password" name="confirmpassword" class="form-control" placeholder="Xác nhận" onkeyup='check();'/>
							</div>
							<div class="mb-3 col-md-12">
							<p id="message" style="text-align:center;"></p>
								<span class="t">Sử dụng 8 kí tự trở lên và kết hợp chữ cái, chữ số và biểu tượng</span>
								
								<?php
                    if(isset($_GET['error2'])){
                        echo "<p style='color:red;font-size:14px;margin:5px 33px;text-align:left;'><svg aria-hidden='true' fill='currentColor' focusable='false' width='16px' height='16px' viewBox='0 0 24 24' xmlns='https://www.w3.org/2000/svg'><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'></path></svg> {$_GET['error2']} </p>";
                    }
					else if(isset($_GET['success'])){
                        echo "<p style='color:red;font-size:14px;margin:5px 33px;text-align:left;'><svg aria-hidden='true' fill='currentColor' focusable='false' width='16px' height='16px' viewBox='0 0 24 24' xmlns='https://www.w3.org/2000/svg'><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'></path></svg> {$_GET['success']} </p>";
                    }
					else if(isset($_GET['error'])){
                        echo "<p style='color:red;font-size:14px;margin:5px 33px;text-align:left;'><svg aria-hidden='true' fill='currentColor' focusable='false' width='16px' height='16px' viewBox='0 0 24 24' xmlns='https://www.w3.org/2000/svg'><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'></path></svg> {$_GET['error']} </p>";
                    }

					// check() password vs confirm password using javasscript
                      
                          

					?>
							</div>
							
								<div class="mb-3 col-md-6 mt-4">
							     <a style="text-decoration: none" href="#">Đăng nhập</a>
								</div>
								<div class="mb-3 col-md-6 mt-4 ">
								    <button class="btn btn-primary " type="submit"  name = "btn" role="button"> Tiếp theo</button>
								</div>
							
						</div>
					</form>
					
				</div>
			</div>
			<div id="div2">
				<ul>
					<li>
						<select name="languages" id="">
							<option value="">Vietname</option>
							<option value="">English</option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
						</select>
					</li>
					<li><a id="a4" href="https://support.google.com/accounts?hl=vi#topic=3382296">Trợ giúp</a></li>
				    <li><a id="a4" href="https://policies.google.com/privacy?gl=VN&hl=vi">Bảo mật</a></li>
			      	<li><a id="a4" href="https://policies.google.com/terms?gl=VN&hl=vi">Điều khoản</a></li>
					
				</ul>
				
				

			
			</div>
		</div>
	</div>
	
<script>
  var check = function() {
  if (document.getElementById('pass').value == document.getElementById('confirmpassword').value) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = '';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Mật khẩu không khớp !';

  }
}
				</script>

<!-- Load jquery trước khi load bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>