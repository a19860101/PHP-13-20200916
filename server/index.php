<?php
    // var_dump($_SERVER);
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER["QUERY_STRING"];
    echo "<br>";
    echo $_SERVER["REQUEST_URI"];
    echo "<br>";
    $domain = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
    echo $domain;