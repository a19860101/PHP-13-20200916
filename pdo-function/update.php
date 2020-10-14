<?php
    include("function.php");

    extract($_POST);
    $skills = implode(",",$skills);
    
    update($name, $phone, $mail, $gender, $edu, $skills, $remark, $id);

    header("location:index.php");