<?php
    extract($_POST);

    if(isset($skills)){
        $skills = implode(",",$skills);
    }else{
        $skills = "";
    }

    try {
        require_once("pdo.php");
        $sql = "INSERT INTO students(name, phone, mail, gender, edu, skills, remark)
                VALUES(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $phone, $mail, $gender, $edu, $skills, $remark]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header("Refresh:0;url=index.php");
    echo "<script>alert('資料已新增');</script>";