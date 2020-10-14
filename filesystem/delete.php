<?php
    $img = $_POST["img"];

    unlink($img);

    echo "檔案已刪除";
    header("refresh:1;url=index.php");