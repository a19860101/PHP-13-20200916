<?php
    // $name = $_POST["name"];
    // $phone = $_POST["phone"];
    // $mail = $_POST["mail"];

    // echo "<div>姓名:{$name}</div>";
    // echo "<div>電話:{$phone}</div>";
    // echo "<div>Mail:{$mail}</div>";
    // echo "<div>姓名:{$_POST["name"]}</div>";
    // echo "<div>電話:{$_POST["phone"]}</div>";
    // echo "<div>Mail:{$_POST["mail"]}</div>";

    extract($_POST);
    echo "<div>姓名:{$name}</div>";
    echo "<div>電話:{$phone}</div>";
    echo "<div>Mail:{$mail}</div>";