<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<header class="header" >

    <div class="header-left">
        <div class="icons">
            <button id="header-menu" class="btn header-menu tooltip" data-info="Main menu">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <a href="index.php" class="header-logo">
            <img src="images/logo_gmail.png" alt="Gmail_Logo">
        </a>
    </div>
    
    <form class="header-middle" action="search.php">
        <div class="icons">
            <button id="js-header-search" class="btn tooltip" data-info="Search">
                <span class="material-icons">search</span>
            </button>
        </div>
        <input type="search" class="header-middle-input" name="search"  placeholder="Tìm kiếm trong thư">
        <div class="icons">
            <button id="js-header-middle" class="btn tooltip" data-info="Search">
                <span class="material-icons">clear</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-middle-options" class="btn tooltip" data-info="Options">
                <span class="material-icons">tune</span>
            </button>
        </div>
    </form>

    <div class="header-right">
        <div class="dropdown">
        <div class="icons">
            <button id="header-support" class="btn">
                <span class="material-icons">help_outline</span>
            </button>
            <div class="dropdown-content">
              
                <p style="color:dimgray; margin:0%" >Trợ giúp</p>
                <p style="color:dimgray;margin:0%">Đào tạo</p>
                <p style="color:dimgray;margin:0%">Nội dung cập nhật</p><hr>
                <p style="color:dimgray;margin:0%">Gửi ý kiến phản hồi cho Google</p>
               
            </div> 
        </div>
        </div>
        <!-- thay đổi giao diện -->
        <div class="dropdown">
        <div class="icons">
            <button id="header-settings" class="btn" data-info="Settings">
                <span class="material-icons">settings</span>
            </button>
            <div class="dropdown-content">
            <p> CÀI ĐẶT GIAO DIỆN</p>
            <div  id="wrapper">
            <input type="checkbox" name="" class="switch-toggle" id="light-dark">
            </div>
               
            </div> 
        </div>
        </div>
       <!-- . -->
        <div class="dropdown">
        <div class="icons">
            <button id="header-apps" class="btn">
                <span class="material-icons">apps</span>
            </button>
            <div class="dropdown-content">
            <img src="images/avatar.png" alt="" style=" width:64px; height: 64px; margin:15px;">
            <img src="images/Gmail-none.png" alt="" style=" width:75px; height: 64px;  margin:15px;">               
            <img src="images/dich.png" alt="" style=" width:64px; height: 64px;  margin:15px;">  

            <img src="images/drive.png" alt="" style=" width:64px; height: 64px; margin:15px;">
            <img src="images/google.png" alt="" style=" width:70px; height: 64px;  margin:15px;">               
            <img src="images/lophoc.png" alt="" style=" width:64px; height: 64px;  margin:15px;"> 
            <img src="images/meet.png" alt="" style=" width:64px; height: 64px; margin:15px;">
            <img src="images/tintuc.png" alt="" style=" width:70px; height: 64px;  margin:15px;">               
            <img src="images/trochuyen.png" alt="" style=" width:64px; height: 64px;  margin:15px;"> 
            <img src="images/youtube.png" alt="" style=" width:64px; height: 64px; margin:15px;">
            <img src="images/anh.png" alt="" style=" width:70px; height: 64px;  margin:15px;">               
            <img src="images/danhba.png" alt="" style=" width:64px; height: 64px;  margin:15px;"> 
            </div> 
        </div>
        </div>
<!-- đăng xuất tài khoản -->
        <div class="dropdown">
                    <div class="icons">
                        <button id="header-profile" class="btn tooltip">
                            <img src="images/avatar.png" class="btn-icon header-profile">
                        </button>
                        <div class="dropdown-content">
                            <img src="images/avatar.png" class="avatar"><br>
                            <button style="border-radius: 8px; font-size: 15px; border: none;">Quản lý Tài khoản Google của bạn</button><br>
                            <button style="border: none; background-color:white">
                              <a href="SignUp.php" target="_blank"><i class="bi bi-person-plus" style="color:dimgray">Thêm một tài khoản khác</i></a>
                            </button>
                            <a href="process-logout.php"><button type="submit" style="width:170px; height: 40px; border-radius: 10px;">Đăng xuất</button></a>
                           
                        </div> 
                    </div>
                </div>
    </div>

    <script>
        var checkbox_toggle = document.getElementById('light-dark');
        checkbox_toggle.addEventListener('change', function(){
            // THêm class dark cho body
            document.body.classList.toggle('dark');
        });
    </script>
</header>


<!-- CSS Header -->

<style>
    
    .dropdown{
        position: relative;
  display: inline-block;
  
    }
    .dropdown-content {
	background-color: white;
    display: none;
    position: absolute;
    min-width: 350px;
    min-height: 360px;
    box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
    right: 10px;
    text-align: center;
    border-radius: 10px;
    line-height: 60px;
    font-size: 20px;
  }

    .dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

.avatar {
      width: 80px;
      height: 80px;
  }

.header {
	display: grid;
	grid-template-columns: 256px 1fr min-content;
	justify-content: space-between;
	align-items: center;
	grid-column-gap: 12px;
	height: 64px;
	padding: 0.15rem;
	background-color: white;
	border-bottom: 1px solid var(--fill-border);
	grid-column: 1 / 4;
}

.header-left  {
	display: flex;
	align-items: center;
	margin: 0 6px;
}

.header-middle {
	display: flex;
	align-items: center;
	justify-content: space-between;
	height: 48px;
	max-width: 720px;
	background-color: var(--fill-grey);
	border-radius: 8px;
	padding: 3px 8px;
	transition: box-shadow 350ms ease;
}

.header-middle:focus-within {
	background-color: white;
	box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.302), 0 1px 3px 1px rgba(60, 64, 67, 0.149);
        
}

input[type="search"]::-webkit-search-cancel-button {
  appearance: none;
}

.header-middle-input {
	display: block;
	font-family: var(--font);
	font-size: 15px;
	font-weight: 50;
	background-color: transparent;
	width: 100%;
	padding: 4px;
	border: none;
	outline: none;
}

.header-middle:focus-within .btn[type="reset"] {
  display: flex;
}

#header-profile {
	height: 42px;
	width: 42px;
}

.header-profile {
	height: 32px;
	width: 32px;
	opacity: 1;
}

#header-menu {
	width: 48px;
	height: 48px;
	margin: 4px;
}
.header-right  {
	display: flex;
	align-items: center;
	margin: 0 6px;
}

:root{
            --transition-effect: 0.25s cubic-bezier(.25,-0.59,.82,1.66) .3s;
        }
        body{
            background: #fff;
            transition: var(--transition-effect);
        }
        body.dark{
            background: #9C9C9C;
        }
        #wrapper{
            margin-top: 10px;
            justify-content: center;
            align-items: center;
            min-height: 30vh;
            
        }
        .switch-toggle{
            width: 70px;
            height: 40px;
            appearance: none;
            background: #F5F5F5;
            border-radius: 26px;
            position: relative;
            cursor: pointer;
            box-shadow: inset 0px 0px 16px rgba(0, 0, 0, .3);
            transition: var(--transition-effect);
            
        }
        .switch-toggle::before{
            content: "";
            width: 33px;
            height: 33px;
            position: absolute;
            top: 3px;
            left: 3px;
            background: #FFFFFF;
            border-radius: 50%;
            box-shadow: 0px 0px 6px rgba(0, 0, 0, .3);
            transition: var(--transition-effect);
            
        }
        .switch-toggle:checked{
            background: #9C9C9C;
        }
        .switch-toggle:checked:before{
            left: 33px;
        }

</style>