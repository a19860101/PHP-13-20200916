<?php
    try {
        require_once("pdo.php");
        $sql = "SELECT * FROM students";
        //預備陳述式
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
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
    <?php while($row = $stmt->fetch()){?>
        <div><?php echo $row["name"];?></div>
    <?php }?>
</body>
</html>