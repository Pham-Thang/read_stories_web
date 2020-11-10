<?php 
    include 'config.php';
    if(!preg_match('/^[\.\,\sa-zA-Z_ÀÁÃẢẠÂẦẤẪẨẬÈÉẼẺẸÊỀẾỂỄỆĂẮẰẴẲẶĐÌÍĨỈỊÙÚỦŨỤÒÓÕỎỌÔỒỐỖỔỘỲÝỶỸỴỪƯỨỬỮỰƠỜỚỞỠỢàáảãạâầấẩẫậăằắẵẳặđèéẽẻẹêềếễểệìíĩỉịòóỏõọôồốỗổộơờớỡởợỳýỹỷỵùúũủụưứừữửự\s]{8,200}+$/', $_GET['content'])){
        echo '<script>window.alert("Không được có kí tự đặc biệt hoặc độ dài khác 8 - 200")</script>';
    }else{
        $a = $_GET['id'];
        $b = $_GET['account'];
        $c = $_GET['content'];
        $stmt=$conn->prepare("INSERT INTO Comments(story_id,account,content) VALUES ('$a','$b','$c')" );
        $stmt->execute();
    }
    $conn->close();
?>