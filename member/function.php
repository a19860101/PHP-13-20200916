<?php
    function auth($user,$pw){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            var_dump($row);
            if($row["pw"] === $pw){
                echo "登入成功";
            }else{
                echo "帳號密碼錯誤";
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    // mysqli_fetch_assoc(),mysqli_fetch_row(),mysqli_fetch_array()