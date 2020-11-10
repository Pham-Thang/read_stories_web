<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Web đọc truyện</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link href="css/home2.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img class="logo" style="width:50px;height:auto;" src="images/logo_web.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="truyenhot.php">Danh sách truyện</a></li>
        <li><a href="truyenmoi.php">Truyện mới</a></li>
        <li><a href="theloai.php">Thể loại</a></li>
      </ul>
      <form action="timkiem.php" method="get" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="keyword" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" name="btnSearch">Tìm kiếm</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php">Tài khoản</a></li>
      </ul>
    </div>
  </nav>