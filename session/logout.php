<?php
    session_start();
    session_destroy();
    echo "您已登出";
    header("refresh:3;url=index.php");