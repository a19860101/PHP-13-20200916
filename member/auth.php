<?php
    include("function.php");
    extract($_POST);
    $auth = auth($user,$pw);

    // header("location:index.php");
    echo $auth;