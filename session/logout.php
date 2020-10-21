<?php
    session_start();

    //刪除所有session
    // session_destroy();

    unset($_SESSION["AUTH"]);
    echo "您已登出";
    header("refresh:3;url=index.php");