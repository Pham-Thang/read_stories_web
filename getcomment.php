<?php include 'config.php'; 
    $stmt=$conn->prepare("SELECT * FROM Comments c JOIN Users u ON c.account=u.account
                            WHERE story_id = ". $_GET['story_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        echo '
            <div class="row">
                <div class="col-sm-3 namecm">
                    '.$row['fullname'].'
                </div>
                <div class="col-sm-9 plotcm">
                    '.$row['content'].'
                </div>
            </div>
        ';
    }
    $conn->close();
?>