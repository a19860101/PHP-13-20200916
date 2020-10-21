<?php
    include("function.php");
    extract($_POST);
    $auth = auth($user,$pw);

    // header("location:index.php");
    // switch($auth){
    //     case 0:
    //         echo "<script>alert('登入成功!!')</script>";
    //         header("refresh:0;url=index.php");
    //     break;
    //     case 1:
    //         echo "<script>alert('帳號或密碼錯誤!!')</script>";
    //         header("refresh:0;url=index.php");
    //     break;
    //     case 2:
    //         echo "<script>alert('請輸入帳號或密碼!!')</script>";
    //         header("refresh:0;url=index.php");
    //     break;
    //     default:
    //         echo "<script>alert('發生錯誤，請稍後再試')</script>";
    //         header("refresh:0;url=index.php");
    // }
    switch($auth){
        case 0:
            header("location:index.php");
        break;
        case 1:
            header("location:index.php?error=1");
        break;
        case 2:
            header("location:index.php?error=2");
        break;
        default:
            header("location:index.php?error=3");
    }