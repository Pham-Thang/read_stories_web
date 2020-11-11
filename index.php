<?php require 'header.php' ?><br>
<div class="content">
	<div class="container">
		<div class="comic-in">
			<div class="col-md-9 col-d">
				<div class="banner"></div>
				<div class="in-line">
					<div class="para-an"><h3>TRUYỆN MỚI NHẤT</h3></div>
					<div class="manga-in">
						<?php include 'config.php';
							$stmt = $conn->prepare("SELECT * FROM `stories` ORDER BY story_id DESC LIMIT 9;");
							$temp = 1;
							$stmt->execute();
							$result = $stmt->get_result();
							while ($row = $result->fetch_assoc()) {
								if (($temp % 3) == 0) {
									echo '<div class="row">';
								}
								echo '
									<div class="col-md-4">
										<a href="doc.php?id=' . $row['story_id'] . '"><img class="img-responsive pic-in" src="' . $row['story_image'] . '" alt=" " ></a>
										
										<p>' . $row['story_name'] . '</p>
										<span><b>New</b>  | <a href="doc.php?id=' . $row['story_id'] . '">Đọc truyện</a></span>
									</div>
								';
								if ($temp % 3 == 0) {
									echo '</div>';
								}
								$temp = $temp + 1;
							}
							$conn->close();
						?>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-m-left">
				<div class="in-left">
					<p class="code">TRUYỆN ĐỀ CỬ</p>
					<a href="truyenhot.php" class="know-more">Xem thêm</a>
				</div>
				<?php include 'config.php';
					$stmt = $conn->prepare("SELECT * FROM Stories ORDER BY view DESC LIMIT 2;");
					$stmt->execute();
					$result = $stmt->get_result();
					while ($row = $result->fetch_assoc()) {
						echo '
							<div class="discount">
								<a href="doc.php?id=' . $row['story_id'] . '"><img class="img-responsive pic-in" src="' . $row['story_image'] . '" alt=" " ></a>
								<p>' . $row['story_name'] . '</p>
								<span><b>HOT</b>  | <a href="doc.php?id=' . $row['story_id'] . '">Đọc truyện</a></span>
							</div>
						';
					}
					$conn->close();
				?>
				<div class="infor-in">
					<h5>Thông tin trang web</h5>
					<div class="info">
						<div><img src="images/email.jpg"><span> : 18020671@vnu.edu.vn</span></div>
						<div><img src="images/email.jpg"><span> : 18021140@vnu.edu.vn</span></div>
						<a href="#"></a>
						<p class="ago">#design by Group31</p>
					</div>
					<a href="#" class="more">More</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="manga-in-on">
			<div class="other">
				<h3>TRUYỆN KHÁC</h3>
				<p>cập nhật liên tục</p>
			</div>
			<ul id="flexiselDemo1">
				<?php include 'config.php';
				$stmt = $conn->prepare("SELECT * FROM `stories` ORDER BY `day_update` DESC LIMIT 10;");
				$temp = 1;
				$stmt->execute();
				$result = $stmt->get_result();
				while ($row = $result->fetch_assoc()) {
					echo '
						<li><a href="doc.php?id=' . $row['story_id'] . '"><img class="img-responsive comic" src="' . $row['story_image'] . '" alt=""></a>
							<div class="hide-in">
								<p>' . $row['story_name'] . '</p>
								<br>mới cập nhật|
								<span><a href="doc.php?id=' . $row['story_id'] . '">ĐỌC TRUYỆN</a></span>
							</div>
						</li>
					';
					if ($temp >= 4) break;
					$temp = $temp + 1;
				}
				$conn->close();
				?>
			</ul>
			<script type="text/javascript" src="js/index.js"></script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>