<?php
	if(isset($_POST['register'])){
		$name = $_POST['username'];
		$pw = $_POST['password'];	
		$error = array();
		if(empty($name)){
			$error['name'] = 'Bạn chưa nhập username';
		}
		else if(!preg_match('/^\w{5,}$/', $name)){
			$error['name'] = 'Username không được có kí tự đặc biệt và có tù 5 - 16 kí tự';
		}
		if(empty($pw)){
			$error['password'] = 'Bạn chưa nhập password';
		}
		else if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',$pw)){
			$error['password'] = 'Password phải ít nhất 8 kí tự, chứa ít nhất 1 chữ và 1 số';
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web đọc truyện</title>
	<script src="js/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/dangki.css">
	<script type="text/javascript">
		function dangki()
		{
			window.location="dangki.php";
		}
	</script>
<?php
	ob_start(); 
	session_start();
	if (isset($_SESSION['username'])){
		$_SESSION['count'] = 0;
		header("Location: taikhoan.php");
	}
?>
</head>

<body>
	<br><a href="index.php">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Trang chủ</button>
	</a><br>
	<div class="content-w3ls">
		<div class="content-agile1">
			<h2 class="agileits1">WEB TRUYỆN</h2>
			<p class="agileits2">đọc truyện free</p>
		</div>
		<div class="content-agile2">
			<form action="dangnhap.php" method="post">
				<br><br>
				<div class="form-control w3layouts">	
					<input type="text" id="username" name="username" placeholder="Tên đăng nhập" title="Vui lòng nhập tên đang nhập" required="">
					<?php echo isset($error['name']) ? $error['name'] : ''; ?>
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password" placeholder="Mật khẩu" id="password" required="">
					<?php echo isset($error['password']) ? $error['password'] : ''; ?>
				</div>			
				<input type="submit" class="register" name="register" value="Đăng nhập">
			</form>
			<script type="text/javascript">
				window.onload = function () {
					document.getElementById("password").onchange = validatePassword;
					document.getElementById("username").onchange = validateUsername;
				}

				function validatePassword(){
					var pass=document.getElementById("password").value;
					if(pass.split(" ").length!=1)
						document.getElementById("password").setCustomValidity("Không được chứa khoảng trắng!");
					else
						document.getElementById("password").setCustomValidity('');	 
				}

				function validateUsername(){
					var username=document.getElementById("username").value;
					if(username.split(" ").length!=1)
						document.getElementById("username").setCustomValidity("Không được chứa khoảng trắng");
					else
						document.getElementById("username").setCustomValidity('');	
				}

			</script>
			<div style = "color:red; margin-left:20%;">
				<?php
					if (isset($_POST['username'])){
						$name = $_POST['username'];
						$pw = $_POST['password'];	
						include "config.php";
						if(!$error){
							//Kiểm tra tên đăng nhập có tồn tại không
							$query = mysqli_query($conn,"SELECT account,password FROM users WHERE account='$name'");
							$row = mysqli_fetch_array($query);
							if ($row == 0) {
								echo "<p>Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. </p>";
							} else{
								//So sánh 2 mật khẩu có trùng khớp hay không
								if ($pw != $row['password']) {
									echo "Mật khẩu không đúng. Vui lòng nhập lại.";
								} else{
									//Lưu tên đăng nhập
									$_SESSION['username'] = $name; 
									$_SESSION['count'] = 0;
									header("Location: taikhoan.php");
								}
							}
						} else{
							echo "Lỗi";
						}

					}
					ob_end_flush(); 
				?>
			</div>
			<p class="wthree w3l">Chưa có tài khoản?</p>
			<button onclick="dangki();">Đăng kí</button>
		</div>
		<div class="clear"></div>
	</div>
	<!-- <ul class="social-agileinfo wthree2">
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	</ul> -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>	
</html>