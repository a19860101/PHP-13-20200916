<?php
    session_start();

    extract($_POST);

    // $_SESSION["USER"] = $user;
    // $_SESSION["PW"] = $pw;

    
    // echo $_SESSION["USER"]."你好!您的密碼是:".$_SESSION["PW"];
    // header("refresh:3;url=index.php");

    $_SESSION["AUTH"] = $_POST;
    extract($_SESSION["AUTH"]);
    // var_dump($_SESSION["AUTH"]);
    // echo $_SESSION["AUTH"]["user"];
    // echo "<br>";
    // echo $_SESSION["AUTH"]["pw"];

    // echo $_SESSION["AUTH"]["user"]."你好!您的密碼是:".$_SESSION["AUTH"]["pw"];
    echo $user."你好!您的密碼是:".$pw;
