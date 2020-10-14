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
    <?php } ?>
</body>
</html>