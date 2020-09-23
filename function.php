<?php
    //函式
    function test(){
        $s = "HELLO TEST";
        echo $s;
    }

    function hello($name){
        echo "HELLO {$name}";
    }

    // hello("John");
    // hello("Mary");

    function square($x){
        return $x * $x;
    }

    // echo square(11);

    // $ans = square(15);
    // echo $ans;

    $ans = test();
    echo $ans;
