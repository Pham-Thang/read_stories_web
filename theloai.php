<?php require 'header.php'; ?>
<script>
    function getdata(id) {
        $.ajax({
            type: "get",
            url: "getcategory.php",
            data: "id=" + id,
            success: function(msg) {
                document.getElementById("result").innerHTML = msg;
            }
        });
    }
</script>
<br><br><br><br>
<div class="container">
    <h2>Danh mục truyện</h2><br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 catebox">
            <?php
                include 'config.php';
                $stmt = $conn->prepare("SELECT c.category_id, c.category_name, COUNT(sc.category_id) as count 
                                        FROM category c JOIN storycategory sc ON c.category_id = sc.category_id
                                        GROUP BY sc.category_id;");
                $temp = "";
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo '
                        <div class="col-sm-4">
                            <a class="textcategory" href="javascript:getdata(\'' . $row['category_id'] . '\')">' . $row['category_name'] . '(' . $row['count'] . ')' . '</a>
                        </div>
                    ';
                }
                $conn->close();
            ?>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<div class="row">
    <div class="col-sm-1 col-md-2"></div>
    <div class="col-sm-10 col-md-8">
        <div id="result"></div>
    </div>
    <div class="col-sm-1 col-md-2"></div>
</div>
<br><br>
<?php include 'footer.php' ?>