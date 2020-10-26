<?php 
    include("basic.php");

    $tt = new Dog;
    echo $tt->color;
    echo $tt->size;
    // echo $tt->gender = "female";
    // echo $tt->type = "pug";
    Dog::sleep();
    echo Dog::now();
