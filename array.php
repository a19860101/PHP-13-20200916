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

    $z = ["紅茶","綠茶","奶茶","珍珠奶茶","冰淇淋紅茶","梅子綠茶","拿鐵"];
    // var_dump($z);

    // echo count($z);
    //陣列迭代
    // for($i=0;$i<count($z);$i++){
    //     echo $z[$i];
    //     echo "<br>";
    // }

   $num = 100;

    echo "<br>";
    echo count($z);
    echo "<br>";
    //排序
    // sort($z);
    // rsort($z);

    //is_array()
    var_dump(is_array($z));
    var_dump(is_array($num));
    echo "<br>";
    //in_array()

    var_dump(in_array("紅茶",$z));
    var_dump(in_array("拿鐵",$z));
    echo "<br>";
    foreach($z as $data){
        echo $data;
        echo "<br>";
    }