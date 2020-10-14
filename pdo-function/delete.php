<?php 

    try {
        require_once("pdo.php");
        $sql = 'DELETE FROM students WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST["id"]]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header("location:index.php");