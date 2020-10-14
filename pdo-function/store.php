<?php
    include("function.php");
    extract($_POST);

    if(isset($skills)){
        $skills = implode(",",$skills);
    }else{
        $skills = "";
    }

    store($name, $phone, $mail, $gender, $edu, $skills, $remark);

    header("Refresh:0;url=index.php");
    echo "<script>alert('資料已新增');</script>";