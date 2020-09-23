<?php
    //函式
    function test(){
        $s = "HELLO TEST";
        echo $s;
    }

    function hello($num,$name="Guest"){
        echo "HELLO {$name} 你是第 {$num} 訪客";
    }

    hello(101,"John");
    hello(102,"Mary");
    hello(103);

    function square($x){
        return $x * $x;
    }

    // echo square(11);

    // $ans = square(15);
    // echo $ans;

    // $ans = test();
    // echo $ans;


