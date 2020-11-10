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
		function dangnhap()
		{
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
		$fullname ="'" . $row['fullname'] . "'";
		$password =$row['password'];
		$email =$row['email'];
		$bd =$row['birthday'];
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
			<form action="changeInfo.php" method="post">
				<br><br>
				<div class="form-control w3layouts"> 
					<input type="text" id="fullname" name="fullname" required=""  value = <?php echo $fullname; ?>>
				</div>
				<div class="form-control w3layouts">	
					<input type="text" style="color: red" id="username" name="username" placeholder="Tên đăng nhập" title="Vui lòng nhập tên đăng nhập" required="" readonly value = <?php echo $username ?>> 
				</div>
				<div class="form-control w3layouts">	
					<input type="text" id="email" name="email" placeholder="Email" title="Vui lòng nhập tên email" required="" value = <?php echo $email ?>>
				</div>
				<div class="form-control w3layouts">	
					<input type="date" id="birthdate" name="birthdate" min="1900-01-01" max="2019-12-8" value = <?php echo $bd ?>>
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password" placeholder="Nhập mật khẩu" id="password1" required="" >
				</div>
				<input type="submit" class="register" name="click_dangki" value="Thay đổi thông tin">
			</form>
			<script type="text/javascript">
				window.onload = function () {
					document.getElementById("email").onchange = validateEmail;
				}

				function validateEmail(){
					var email = document.getElementById("email").value; 
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
					if (!filter.test(email))
							document.getElementById("email").setCustomValidity("Sai định dạng email");
					else
							document.getElementById("email").setCustomValidity("");
				}
			</script>
			<div style="color:red;margin-left:20%">
				<?php
					if (isset($_POST['username'])){
						$fullname = $_POST['fullname'];
						$pw = $_POST['password'];	
						$email = $_POST['email'];
						$bd = $_POST['birthdate'];
						include "config.php";
						//Kiểm tra trùng mật khẩu hay không
						$query = mysqli_query($conn,"SELECT password FROM users WHERE account='$username'");
						$row = mysqli_fetch_array($query);
						if ($row['password'] != $pw) {
							echo "<p>Mật khẩu bạn nhập không chính xác</p>";
						} else{
							//Kiểm tra tên email đã tồn tại chưa
							$query = mysqli_query($conn,"SELECT account,password FROM users WHERE email='$email'");
							$row = mysqli_fetch_array($query);
							if ($row['account'] != $username ) {
								echo "<p>Email này đã tồn tại. Vui lòng sử dụng email khác. </p>";
							} else{
								$sql = "UPDATE users SET fullname = '$fullname', email = '$email', birthday = '$bd' 
										WHERE users.account = '$username';";
								if (mysqli_query($conn, $sql)){
									$_SESSION['count'] = -1;
									header("Location: taikhoan.php");
								}
								else echo "Chỉnh sửa không thành công!<br><br>";
							}
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