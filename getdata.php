<?php 
    include 'config.php';
    $stmt=$conn->prepare("SELECT * FROM chapters WHERE story_id=".$_GET['id']." AND ordernumerical=".$_GET['chapter']);
    $link = "";
    $temp = "";
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $link = $row['link'];
        $temp = $row['name_image'];
    }
    $nameImages = explode("\n",$temp);
    echo '<div class="col-sm-1"></div><div class="col-sm-9">';
    foreach($nameImages as $image){
        echo '<img style="width:100%;height:auto;" src="'.$link.$image.'" /><br />';
        echo '<script>window.alert(1)</script>';
    }
    echo'</div><div class="col-sm-2">';
    $conn->close();
?>