<?php require 'header.php'; ?>
<br><br><br>
<div class="in-line">
	<div class="container">
    <div class="para-an">
        <h3>KẾT QUẢ TÌM KIẾM</h3>
    </div>
    <div class="manga-in">
        <?php include 'config.php';
            $key = $_GET['keyword'];
            $stmt = $conn->prepare("SELECT * FROM stories 
                                    WHERE story_name LIKE '%" . $key . "%';");
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
                if ($temp > 9) break;
                $temp = $temp + 1;
            }
            $conn->close();
        ?>
        <div class="clearfix"> </div>
    </div>
</div>
<?php include 'footer.php' ?>