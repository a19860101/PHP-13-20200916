<?php
    session_start();

    extract($_POST);

    $_SESSION["USER"] = $user;
    $_SESSION["PW"] = $pw;

    echo $_SESSION["USER"]."你好!您的密碼是:".$_SESSION["PW"];
    header("refresh:3;url=index.php");