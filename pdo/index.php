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
</head>
<body>
    <?php foreach($rows as $row){?>
        <div><?php echo $row["name"];?></div>
    <?php }?>
</body>
</html>