<?php
    // var_dump($_POST); 
    // echo "<br>";
    // echo $_POST["user"];
    // echo "<br>";
    // echo $_POST["mail"];
    // echo "<br>";
    // echo $_POST["phone"];
    // foreach($_POST as $data){
    //     echo $data;
    //     echo "<br>";
    // }

    // var_dump($_GET);
    // echo "<br>";
    // echo $_GET["user"];
    // echo "<br>";
    // echo $_GET["mail"];
    // echo "<br>";
    // echo $_GET["phone"];
    // foreach($_GET as $data){
    //     echo $data;
    //     echo "<br>";
    // }
    var_dump($_REQUEST);
    echo "<br>";
    echo $_REQUEST["user"];
    echo "<br>";
    echo $_REQUEST["mail"];
    echo "<br>";
    echo $_REQUEST["phone"];
    foreach($_REQUEST as $data){
        echo $data;
        echo "<br>";
    }