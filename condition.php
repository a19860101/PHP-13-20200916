<?php
    // if(條件){
    //     動作
    // }

    // if(條件){
    //     動作A
    // }else{
    //     動作B
    // }

    // if(條件A){
    //     動作A
    // }elseif(條件B){
    //     動作B
    // }

    // if(條件A){
    //     動作A
    // }elseif(條件B){
    //     動作B
    // }else{
    //     動作C
    // }
    $x = 10;
    if($x > 0){
        echo "Success 1";
    }

    if($x < 0){
        echo "Success 2";
    }else{
        echo "Error";
    }

    if($x > 0){
        echo "正數";
    }elseif($x < 0){
        echo "負數";
    }else{
        echo "Error!!!!";
    }
    echo "<br>";
    //switch

    switch($x){
        case 0:
            echo 0;
        break;
        case 1:
            echo 1;
        break;
        case 2:
            echo 2;
        break;
        default:
            echo "error!!!!!!!!";
    }

