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

    $title = "紅茶";
    $price = 20;
    $volumn = "500ml";

    $drinks = compact("title","price","volumn");
    // var_dump($drinks);
    // echo $drinks["title"];
    // echo $drinks["price"];
    // echo $drinks["volumn"];

    foreach($drinks as $drink){
        echo $drink;
        echo "<br>";
    }

    // $drinks = compact("title");
    // var_dump($drinks);
    // echo $drinks["title"];


    $id = 12;
    // ["id"=>12]
    var_dump(compact("id"));
    
    $name = "test";

    $test = extract($users,EXTR_PREFIX_SAME,'t');
    echo $t_name;
    echo $mail;
    echo $birth;
