<?php
    #單行註解
    // 變數

    $a = 100;
    $A = 999;

    echo $a;
    echo "<br>";
    echo $A;
    echo "<br>";
    //常數
    define("ACCOUNT","administrator");
    define("PASSWORD","12345");

    echo ACCOUNT;
    echo "<br>";
    echo PASSWORD;
    echo "<br>";

    // 資料型別(型態)
    /* 
    1. Integer 整數
    2. Float 浮點數
    3. String 字串
    4. Boolean 布林值 (true,false) 
    
    多行註解  Alt + Shift + A
    */

    $s = "哈囉PHP";
    var_dump($s);
?>