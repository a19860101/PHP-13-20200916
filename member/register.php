<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            帳號
            <input type="text" name="user">
        </div>
        <div>
            密碼
            <input type="password" name="pw">
        </div>
        <input type="submit" value="申請">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>