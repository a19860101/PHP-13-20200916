<?php
    function auth($user,$pw){
        try {
            if(empty($user) || empty($pw)){
                return 2;
                //請輸入帳號或密碼
            }
            session_start();
            require_once("pdo.php");
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            if($row && $row["pw"] == $pw){
                $_SESSION["AUTH"] = $row;
                return 0;
            }else{
                return 1 ;
                //帳號或密碼錯誤
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    function logout(){
        session_start();
        unset($_SESSION["AUTH"]);
    }
    function register(){
        
    }