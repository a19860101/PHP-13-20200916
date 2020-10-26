<?php
    include("function.php");

    extract($_POST);

    $result = register($user,$pw);

    switch($result){
        case 0:
            echo "會員申請成功，請重新登入";
        break;
        case 1:
            echo "帳號已被使用。";
        break;
    }
    header("Refresh:3;url=index.php");