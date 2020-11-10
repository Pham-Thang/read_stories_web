<!DOCTYPE html>
<html>
<head>
	<title>Web đọc truyện</title>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/dangki.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script type="text/javascript">
		function dangnhap() {
			window.location="dangnhap.php";
		}
	</script>	
	<?php
		ob_start(); 
		session_start();
		$username = $_SESSION['username'];
	    include "config.php";
		$query = mysqli_query($conn,"SELECT * FROM users WHERE account='$username'");
		$row = mysqli_fetch_array($query);
		$password =$row['password'];
	?>
</head>
<body>
	<br><a href="index.php">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">Trang chủ</button>
	</a><br>
	<div class="content-w3ls">
		<div class="content-agile1">
			<h2 class="agileits1">WEB TRUYỆN</h2>
			<p class="agileits2">đọc truyện free</p>
		</div>
		<div class="content-agile2">
			<form action="changePassword.php" method="post">
				<br><br>
				<div class="form-control w3layouts">	
					<input type="text" style="color: red" id="username" name="username" placeholder="Tên đăng nhập" title="Vui lòng nhập tên đăng nhập" required="" readonly value = <?php echo $username ?>> 
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password" placeholder="Nhập mật khẩu cũ" id="password" required="" autocomplete="off">
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password1" placeholder="Nhập mật khẩu mới" id="password1" required="" >
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password2" placeholder="Nhập lại mật khẩu mới" id="password2" required="" >
				</div>
				<input type="submit" class="register" name="click_dangki" value="Thay đổi thông tin">
			</form>
			<script type="text/javascript">
				window.onload = function () {
					document.getElementById("password").onchange = validatePassword;
					document.getElementById("password1").onchange = validatePassword1;
					document.getElementById("password2").onchange = validatePassword2;
				}

				function validatePassword(){
					var pass=document.getElementById("password").value;
					if(pass.split(" ").length!=1)
						document.getElementById("password").setCustomValidity("Không được chứa khoảng trắng!");
					else
						document.getElementById("password").setCustomValidity('');	
				}

				function validatePassword1(){
					var pass1=document.getElementById("password1").value;
					if(pass1.split(" ").length!=1)
						document.getElementById("password1").setCustomValidity("Không được chứa khoảng trắng!");
					else
						document.getElementById("password1").setCustomValidity('');	 
				}

				function validatePassword2(){
					var pass2=document.getElementById("password2").value;
					var pass1=document.getElementById("password1").value;
					if(pass1!=pass2)
						document.getElementById("password2").setCustomValidity("Mật khẩu phải giống nhau!");
					else
						document.getElementById("password2").setCustomValidity('');	 
				}
			</script>
			<div style="color:red;margin-left:20%">
				<?php
					if (isset($_POST['password'])){
						$pw = $_POST['password'];	
						$pw1 = $_POST['password1'];	
						include "config.php";
						//Kiểm tra trùng mật khẩu hay không
						$stmt = $conn->prepare("SELECT password FROM users WHERE account='$username'");
						$temp = "";
						$stmt->execute();
						$result = $stmt->get_result();
						while ($row = $result->fetch_assoc()) {
							$temp = $row['password'];
						}
						if ($temp != $pw) {
							echo "<p>Mật khẩu bạn nhập không chính xác</p>";
						} else{
							$sql = "UPDATE users SET password = '$pw1' WHERE users.account = '$username';";
							if (mysqli_query($conn, $sql)){
							$_SESSION['count'] = -1;
							header("Location: taikhoan.php");
							} else 
								echo "Chỉnh sửa không thành công!<br><br>";
						}
					}
					ob_end_flush();
				?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>	
</html>