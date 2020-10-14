<?php
    // var_dump($_FILES);
    // var_dump($_FILES["img"]);
    // echo $_FILES["img"]["name"];
    // echo "<br>";
    // echo $_FILES["img"]["type"];
    // echo "<br>";
    // echo $_FILES["img"]["tmp_name"];
    // echo "<br>";
    // echo $_FILES["img"]["error"];
    // echo "<br>";
    // echo $_FILES["img"]["size"];

    extract($_FILES["img"]);
    // echo $name;
    // echo $type;
    // echo $tmp_name;
    // echo $error;
    // echo $size;
    $target = "images/".$name;
    if($error === 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }