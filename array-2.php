<?php
    // $x = ["Apple","Banana","Cat"];
    // var_dump($x);
    //關聯陣列
    $users = [
        "name"  =>"John",
        "mail"  =>"john@gmail.com",
        "birth" =>"1980/08/25"
    ];
    echo "<br>";
    // var_dump($users);
    /*
        大箭頭 =>
        小箭頭 ->
    */

    // foreach($users as $user){
    //     echo $user;
    //     echo "<br>";
    // }

    foreach($users as $user_k => $user_v){
        echo "{$user_k} : {$user_v}";
        echo "<br>";
    }