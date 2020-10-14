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
    function show($id){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMssage();
        }
    }
    function store($name, $phone, $mail, $gender, $edu, $skills, $remark){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO students(name, phone, mail, gender, edu, skills, remark)
                    VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $phone, $mail, $gender, $edu, $skills, $remark]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try {
            require_once("pdo.php");
            $sql = 'DELETE FROM students WHERE id = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($name, $phone, $mail, $gender, $edu, $skills, $remark, $id){
        try {
            require_once("pdo.php");
            $sql = "UPDATE students 
                    SET 
                        name    = ?,
                        phone   = ?,
                        mail    = ?,
                        gender  = ?,
                        edu     = ?,
                        skills  = ?,
                        remark  = ?
                    WHERE
                        id      = ?
                    ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $phone, $mail, $gender, $edu, $skills, $remark, $id]);
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }