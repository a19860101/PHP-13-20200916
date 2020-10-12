<?php
    try {
        require_once("pdo.php");
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_GET["id"]]);
        $row = $stmt->fetch();
    }catch(PDOException $e){
        echo $e->getMssage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2>學員 <?php echo $row["name"];?> 資料</h2>
                <ul class="list-group my-3">
                    <li class="list-group-item">Mail:<?php echo $row["mail"];?></li>
                    <li class="list-group-item">性別:<?php echo $row["gender"];?></li>
                    <li class="list-group-item">電話:<?php echo $row["phone"];?></li>
                    <li class="list-group-item">學歷:<?php echo $row["edu"];?></li>
                    <li class="list-group-item">專長<?php echo $row["skills"];?></li>
                    <li class="list-group-item">備註:
                        <?php echo $row["remark"] === ""? "無":$row["remark"];?>
                    </li>
                </ul>
                <a href="index.php" class="btn btn-primary">學員列表</a>
            </div>
        </div>
    </div>
</body>
</html>