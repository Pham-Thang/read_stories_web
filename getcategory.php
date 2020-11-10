<div class="in-line">
	<div class="para-an">
		<h3>KẾT QUẢ</h3>
	</div>
	<div class="manga-in">
		<?php include 'config.php'; 
			$stmt=$conn->prepare("SELECT *
									FROM Stories s JOIN storycategory sc ON s.story_id = sc.story_id
									WHERE sc.category_id = ".$_GET['id'].";");
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
						<span>New  | <a href="doc.php?id=' . $row['story_id'] . '">Đọc truyện</a></span>
					</div>
				';
				if ($temp % 4 == 0) {
					echo '</div>';
				}
				$temp = $temp + 1;
			}
			$conn->close();
		?>
	</div>
	<div class="clearfix"> </div>
</div>