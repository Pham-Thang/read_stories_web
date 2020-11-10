<?php 
include 'config.php';
$stmt=$conn->prepare("SELECT * FROM chapters WHERE story_id=".$_GET['id']." AND ordernumerical=".$_GET['chapter']);
    $temp = "";
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $temp = $row['link'];
    }
    $temp2 = explode("\n",$temp);
    echo '<div class="col-sm-1"></div><div class="col-sm-9">';
    foreach($temp2 as $value){
        echo '<img style="width:100%;height:auto;" src="'.$value.'" /><br />';
    }
    echo'</div><div class="col-sm-2">';
    $conn->close();
?>