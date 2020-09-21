<?php
    $x = array();
    $x[0] = "Apple";
    $x[1] = "Banana";
    $x[2] = "Cat";
    //陣列索引
    // var_dump($x);

    //錯誤種類:Notice,Warning,Fatal Error

    $y = array("Apple","Banana","Cat");
    // var_dump($y);

    $z = ["紅茶","綠茶","奶茶","珍珠奶茶","冰淇淋紅茶","梅子綠茶"];
    // var_dump($z);

    echo count($z);
    //陣列迭代
    for($i=0;$i<count($z);$i++){
        echo $z[$i];
        echo "<br>";
    }