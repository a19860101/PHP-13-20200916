<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="login.php">登入</a>
        <a href="#">註冊</a>
        
        <a href="#">登出</a>
    </nav>
    <?php
        if(isset($_GET["error"])){
            switch($_GET["error"]){
                case 1:
                    echo "帳號或密碼錯誤!!";
                break;
                case 2:
                    echo "請輸入帳號或密碼!!";
                break;
                case 3:
                    echo "發生錯誤，請稍後再試!!";
                break;
            }
        }
    ?>
</body>
</html>