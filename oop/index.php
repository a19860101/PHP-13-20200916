<?php 
    include("Post.php");
    include("User.php");

    use App\User\Show;
    
    $user = new Show;
    echo $user->test();
    // $user = new App\User\Show;
    $post = new App\Post\Show;
    echo $post->test();


    


    // include("basic.php");

    // $tt = new Dog;
    // echo $tt->color;
    // echo $tt->size;
    // echo $tt->gender = "female";
    // echo $tt->type = "pug";
    // Dog::sleep();
    // echo Dog::now();