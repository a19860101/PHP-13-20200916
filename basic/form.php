<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="response.php" method="post">
        <input type="text" name="user">
        <input type="text" name="mail">
        <input type="text" name="phone">
        <input type="submit" value="送出">
    </form>
    <form action="response.php" method="get">
        <input type="text" name="user">
        <input type="text" name="mail">
        <input type="text" name="phone">
        <input type="submit" value="送出">
    </form>
    <!-- 
        表單通常都是使用post方法做傳遞，除了搜尋功能以外。
        連結只可以使用get方法做傳遞
     -->
</body>
</html>