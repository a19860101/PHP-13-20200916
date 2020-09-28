<?php
    // $name = $_POST["name"];
    // $phone = $_POST["phone"];
    // $mail = $_POST["mail"];
    // $gender = $_POST["gender"];
    $edu = $_POST["edu"];


    // echo "<div>姓名:{$name}</div>";
    // echo "<div>電話:{$phone}</div>";
    // echo "<div>Mail:{$mail}</div>";
    // echo "<div>性別:{$gender}</div>";
    echo "<div>學歷:{$edu}</div>";
    // echo "<div>姓名:{$_POST["name"]}</div>";
    // echo "<div>電話:{$_POST["phone"]}</div>";
    // echo "<div>Mail:{$_POST["mail"]}</div>";
    // echo "<div>性別:{$_POST["gender"]}</div>";
    echo "<div>學歷:{$_POST["edu"]}</div>";

    extract($_POST);
    // echo "<div>姓名:{$name}</div>";
    // echo "<div>電話:{$phone}</div>";
    // echo "<div>Mail:{$mail}</div>";
    // echo "<div>性別:{$gender}</div>";
    echo "<div>學歷:{$edu}</div>";