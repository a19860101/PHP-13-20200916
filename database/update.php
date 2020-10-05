<?php
    require_once("conn.php");
    extract($_POST);
    $skills = implode(",",$skills);
    $sql = "UPDATE students 
            SET 
                name    = '$name',
                phone   = '$phone',
                mail    = '$mail',
                edu     = '$edu',
                gender  = '$gender',
                skills  = '$skills',
                remark  = '$remark'
            WHERE
                id      = $id
            ";
    mysqli_query($conn,$sql);
    echo "<script>alert('資料修改完成!!');</script>";
    header("refresh:1;url=index.php");

