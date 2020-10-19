<?php
    // $img = $_POST["img"];

    // unlink($img);

    // echo "檔案已刪除";
    // header("refresh:1;url=index.php");

    $del = $_POST["del"];
    $path = $_POST["path"];
    // var_dump($path);
    foreach($path as $p){
        unlink($p);
    }
    foreach($del as $d){
        try {
            $sql = "DELETE FROM gallery WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$d]);

        }catch(PDOException $e){
            echo $e -> getMessage();
        }

    }

    header("location:index.php");