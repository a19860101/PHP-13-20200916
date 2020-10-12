<?php
    try {
        require_once("pdo.php");
        $sql = "SELECT * FROM students";
        //預備陳述式
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($data = $stmt->fetch()){
            $rows[] = $data;
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <nav class="nav">
        <a class="nav-link active" href="create.php">新增學員資料</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>電話</th>
                        <th>Mail</th>
                        <th>性別</th>
                        <th>教育程度</th>
                        <th>專長</th>
                        <th>備註</th>
                    </tr>
                <?php foreach($rows as $row){?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["name"];?></td>
                        <td><?php echo $row["phone"];?></td>
                        <td><?php echo $row["mail"];?></td>
                        <td><?php echo $row["gender"];?></td>
                        <td><?php echo $row["edu"];?></td>
                        <td><?php echo $row["skills"];?></td>
                        <td><?php echo $row["remark"];?></td>
                    </tr>
                <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>