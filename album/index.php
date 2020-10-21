<?php
    include("function.php");
    $rows = showAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="create.php">上傳圖片</a>
    </nav>
    <div class="container">
        <?php foreach($rows as $row){ ?>
        <div class="box">
            <img src="thumbs/<?php echo $row["path"];?>" alt="">
        </div>
        <?php }?>
    </div>
</body>
</html>