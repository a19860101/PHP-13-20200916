<?php
    include("function.php");
    $file = $_FILES["path"];
    $name = $_FILES["path"]["name"];
    $path = uploadImg($file);
    store($name,$path);