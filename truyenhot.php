<?php require 'header.php'; ?>
<br><br><br>
<div class="in-line">
	<div class="container">
	<div class="para-an">
		<h3>TẤT CẢ TRUYỆN (từ truyện có lượt xem cao nhất)</h3>
	</div>
	<div class="manga-in">
		<?php include 'config.php';
		$stmt = $conn->prepare("SELECT * FROM Stories ORDER BY view DESC");
		$temp = 1;
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			if (($temp % 4) == 0) {
				echo '<div class="row">';
			}
			echo '
				<div class="col-sm-3">
					<a href="doc.php?id=' . $row['story_id'] . '"><img class="img-responsive pic-in" src="' . $row['story_image'] . '" alt=" " ></a>
					
					<p>' . $row['story_name'] . '</p>
					<span>HOT  | <a href="doc.php?id=' . $row['story_id'] . '">Đọc truyện</a></span>
				</div>
			';
			if ($temp % 4 == 0) {
				echo '</div>';
			}
			$temp = $temp + 1;
		}
		$conn->close();
		?>
		<div class="clearfix"> </div>
	</div>
</div>
<?php include 'footer.php' ?>