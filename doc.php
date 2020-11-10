<?php 
    session_start();
    include 'header.php';
    echo "<input type='hidden' id='temp-id' value='".$_GET['id']."'/>";
    echo "<input type='hidden' id='temp-account' value='".$_SESSION['username']."'/>";
?>
<link rel="stylesheet" type="text/css" href="css/stylereadstory.css">

<div class="row" style="margin-top:50px;">
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
        <select id="chapter" class="selectchap">
            <?php include 'config.php'; 
                $stmt=$conn->prepare("SELECT COUNT(ordernumerical) AS t 
                                        FROM chapters WHERE story_id = ". $_GET['id']);
                $temp = 1;
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()) {
                    $temp = $row['t'];
                }
                for($i = 0; $i < $temp; $i = $i + 1){
                    echo '<option value='.($i + 1).'>'.'Chapter '.($i + 1).' </option>';
                }
                $conn->close();
            ?>
        </select>
    </div>
    <div class="col-sm-2">
        <button class="readchap" onclick="onupdate()">Đọc</button>
    </div>
    <div class="col-sm-4"></div>
</div>
<div id="result" class="row"></div>
<div id="controlchap" class="row">
    <div class="col-xs-6"><button class="btnextchap" id="prechap" onclick="onprechap()">Chapter trước</button></div>
    <div class="col-xs-6"><button class="btnextchap" id="nextchap" onclick="onnextchap()">Chapter kế</button></div>
</div>

<div class="para-an commentbox">
	<h3>BÌNH LUẬN</h3>
</div>
<?php 
    if(!isset($_SESSION['username'])){
        echo '<div class="col-xs-1"></div><div class="col-xs-11">Bạn chưa đăng nhập, vui lòng đăng nhập để bình luận</div>';
    }
    else{
        echo'
            <input type="text" id="textcomment" class="textcomment" />
            <input type="button" id="buttoncomment" onclick="comment()" class="buttoncomment" value="Gửi" />
        ';
    }
?>
<div id="commentframe" class="row boxco">
</div>
<script src="js/doc.js"></script>
<?php include 'footer.php'; ?>