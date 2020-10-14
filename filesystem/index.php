<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>檔案上傳</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳檔案">
    </form>
    <?php
        $imgs = glob("images/*");
        $img_num = count($imgs);
        echo "<div>目前共有{$img_num}張圖片</div>";
        foreach($imgs as $img){
    ?>

    <img src="<?php echo $img;?>" width="150">
    <form action="delete.php" method="post">
        <input type="hidden" name="img" value="<?php echo $img; ?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
    <?php } ?>
</body>
</html>