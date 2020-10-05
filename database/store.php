<?php
    require_once('conn.php');
    extract($_POST);
    if(empty($name) || ctype_space($name)){
        echo "<div>姓名不得為空</div>";
    }else{
        echo "<div>姓名:".trim($name)."</div>";
    }

    if(empty($phone) || ctype_space($phone)){
        echo "<div>電話不得為空</div>";
    }else{
        echo "<div>電話:".trim($phone)."</div>";
    }

    if(empty($mail) || ctype_space($mail)){
        echo "<div>Mail不得為空</div>";
    }else{
        echo "<div>Mail:".trim($mail)."</div>";

    }

    echo "<div>性別:{$gender}</div>";
    echo "<div>學歷:{$edu}</div>";

    if(isset($skills)){
        echo "<div>專長:".implode(",",$skills)."</div>";
        $skills = implode(",",$skills);
    }


    echo "<div>備註:{$remark}</div>";

    $sql = "INSERT INTO students(name, phone, mail, gender, edu, skills, remark)
            VALUES('$name','$phone','$mail','$gender','$edu','$skills','$remark')";

    mysqli_query($conn,$sql);
    

