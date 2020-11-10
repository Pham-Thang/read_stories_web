<?php
if (isset($_POST['click_dangki'])){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$pw = $_POST['password'];	
	$email = $_POST['email'];
	$bd = $_POST['birthdate'];
	$error = array();
	if(empty($fullname)){
		$error['fullname'] = 'bạn chưa nhập tên';
	}
	else if(!preg_match('/^[a-zA-Z_ÀÁÃẢẠÂẦẤẪẨẬÈÉẼẺẸÊỀẾỂỄỆĂẮẰẴẲẶĐÌÍĨỈỊÙÚỦŨỤÒÓÕỎỌÔỒỐỖỔỘỲÝỶỸỴỪƯỨỬỮỰƠỜỚỞỠỢàáảãạâầấẩẫậăằắẵẳặđèéẽẻẹêềếễểệìíĩỉịòóỏõọôồốỗổộơờớỡởợỳýỹỷỵùúũủụưứừữửự\s]{8,50}+$/', $fullname)){
		$error['fullname'] = 'fullname không chứa kí tự đặt biệt và phải có ít nhất 8 kí tự';
	}
	if(empty($username)){
		$error['username'] = 'Bạn chưa nhập username';
	}
	else if(!preg_match('/^\w{5,}$/', $username)){
		$error['username'] = 'Username không được có kí tự đặc biệt và có tù 5 - 16 kí tự';
	}
	if(empty($pw)){
		$error['password'] = 'Bạn chưa nhập password';
	}
	else if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',$pw)){
		$error['password'] = 'Password phải ít nhất 8 kí tự, chứa ít nhất 1 chữ và 1 số';
	}
	if(empty($email)){
		$error['email'] = 'Bạn chưa nhập email';
	}
	else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
		$error['email'] = 'Sai định dạng email';
	}
	if(empty($bd)){
		$error['birthday'] = 'Bạn chưa nhập ngày sinh';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web đọc truyện</title>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/dangki.css">
	<script type="text/javascript">
		function dangnhap()
		{
			window.location="dangnhap.php";
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
			<form action="dangki.php" method="post">
				<div class="form-control w3layouts"> 
					<input type="text" id="fullname" name="fullname" placeholder="Họ và tên" required="">	
					<?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>	
				</div>
				<div class="form-control w3layouts">	
					<input type="text" id="username" name="username" placeholder="Tên đăng nhập" title="Vui lòng nhập tên đăng nhập" required="">
					<?php echo isset($error['username']) ? $error['username'] : ''; ?>
				</div>
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="password" placeholder="Mật khẩu" id="password1" required="">
					<?php echo isset($error['password']) ? $error['password'] : ''; ?>
				</div>	
				<div class="form-control agileinfo">	
					<input type="password" class="lock" name="confirm-password" placeholder="Nhập lại mật khẩu" id="password2" required="">
				</div>			
				<div class="form-control w3layouts">	
					<input type="text" id="email" name="email" placeholder="Email" title="Vui lòng nhập tên email" required="">
					<?php echo isset($error['email']) ? $error['email'] : ''; ?>
				</div>
				<div class="form-control w3layouts">	
					<input type="date" id="birthdate" name="birthdate" min="1900-01-01" max="2019-12-8" required="">
				</div>
				<input type="submit" class="register" name="click_dangki" value="Đăng kí">
			</form>
			<script type="text/javascript">
				window.onload = function () {
					document.getElementById("password1").onchange = validatePassword1;
					document.getElementById("password2").onchange = validatePassword2;
					document.getElementById("username").onchange = validateUsername;
					document.getElementById("email").onchange = validateEmail;
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

				function validateUsername(){
					var username=document.getElementById("username").value;
					if(username.split(" ").length!=1)
						document.getElementById("username").setCustomValidity("Không được chứa khoảng trắng");
					else
						document.getElementById("username").setCustomValidity('');
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
			<div style="color:red;margin-left:10%">
				<?php
				if (isset($_POST['username'])){
					$fullname = $_POST['fullname'];
					$username = $_POST['username'];
					$pw = $_POST['password'];	
					$email = $_POST['email'];
					$bd = $_POST['birthdate'];
					include "config.php";
					if(!$error){
						//Kiểm tra tên đăng nhập đã tồn tại chưa
						$query = mysqli_query($conn,"SELECT account,password FROM users WHERE account='$username'");
						$row = mysqli_fetch_array($query);
						if ($row != 0) {
							echo "<p>Tên đăng nhập này đã tồn tại. Vui lòng sử dụng tên khác. </p>";
						} else{	
							//Kiểm tra tên email đã tồn tại chưa
							$query = mysqli_query($conn,"SELECT account,password FROM account WHERE Email='$email'");
							$row = mysqli_fetch_array($query);
							if ($row != 0) {
								echo "<p>Email này đã tồn tại. Vui lòng sử dụng email khác. </p>";
							} else{
								$sql = "INSERT INTO users (account,Password, fullname,Email,BirthDay) VALUES ('$username', '$pw', '$fullname','$email','$bd')";
								if (mysqli_query($conn, $sql)){
								$_SESSION['username'] = $username;
								$_SESSION['count'] = 0;
								header("Location: taikhoan.php");
								}
								else echo "Đăng kí không thành công!<br><br>";
							}
						}
					} else{
						echo "Lỗi";
					}
				} else
					ob_end_flush();
			?>
		</div>
		<p class="wthree w3l">Đã có tài khoản?</p>
		<button onclick="dangnhap();">Đăng nhập</button><br>
	</div>
	<div class="clear"></div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>	
</html>