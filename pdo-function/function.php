<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($data = $stmt->fetch()){
                $rows[] = $data;
            }
            return $rows;
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
    }