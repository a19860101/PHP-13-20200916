<?php
    // $name = $_POST["name"];
    // $phone = $_POST["phone"];
    // $mail = $_POST["mail"];
    // $gender = $_POST["gender"];
    // $edu = $_POST["edu"];
    // $skills = $_POST["skills"];
    // var_dump($skills);
    // 陣列轉字串
    // $skill = implode(',',$skills);

    // $remark = $_POST["remark"];

    // echo "<div>姓名:{$name}</div>";
    // echo "<div>電話:{$phone}</div>";
    // echo "<div>Mail:{$mail}</div>";
    // echo "<div>性別:{$gender}</div>";
    // echo "<div>學歷:{$edu}</div>";
    // echo "<div>專長:{$skill}</div>";
    // echo "<div>備註:{$remark}</div>";


    // echo "<div>姓名:{$_POST["name"]}</div>";
    // echo "<div>電話:{$_POST["phone"]}</div>";
    // echo "<div>Mail:{$_POST["mail"]}</div>";
    // echo "<div>性別:{$_POST["gender"]}</div>";
    // echo "<div>學歷:{$_POST["edu"]}</div>";
    // echo "<div>專長:".implode(",",$_POST["skills"])."</div>";
    // echo "<div>備註:{$_POST["remark"]}</div>";

    extract($_POST);
    if(empty($name)){
        echo "<div>姓名不得為空</div>";
    }else{
        echo "<div>姓名:".trim($name)."</div>";
    }

    if(empty($phone)){
        echo "<div>電話不得為空</div>";
    }else{
        echo "<div>電話:".trim($phone)."</div>";
    }
    
    if(empty($mail)){
        echo "<div>Mail不得為空</div>";
    }else{
        echo "<div>Mail:".trim($mail)."</div>";

    }
    
    echo "<div>性別:{$gender}</div>";
    echo "<div>學歷:{$edu}</div>";

    if(isset($skills)){
        echo "<div>專長:".implode(",",$skills)."</div>";
    }

    
    echo "<div>備註:{$remark}</div>";