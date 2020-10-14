<?php 
    include("function.php");
    // delete($_POST["id"]);
    delete($_REQUEST["id"]);

    header("location:index.php");