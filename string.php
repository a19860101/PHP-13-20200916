<?php
    $s = "莫瑞肘擊吞惡意犯規 詹姆斯：他不是故意";
    $s_en = "hello world";
    // echo $s;
    // echo substr($s,0,13);
    // echo mb_substr($s,0,3);
    // echo mb_substr($s,0,5,"utf-8");

    $pw = "jieck325@_";
    echo $pw;
    echo "<br>";
    echo md5($pw);
    echo "<br>";
    echo sha1($pw);
    echo "<br>";
    echo md5(md5($pw));
    echo "<br>";
    echo sha1(sha1($pw));
    echo "<br>";
    echo md5(sha1($pw));
    echo "<br>";
    echo sha1(md5($pw));