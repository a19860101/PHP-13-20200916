<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post" enctype="multipart/form-data">
        <input type="file" name="path">
        <input type="submit" value="上傳圖片">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>