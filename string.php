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
    echo "<br>";
    
    echo uniqid();
    echo "<br>";
    echo md5(uniqid());
    echo "<br>";
    echo substr(md5(uniqid()),0,8);
    echo "<br>";
    
    echo time();
    echo "<br>";
    echo substr(md5(time()),0,10);

    $text = "<h1 class='test'>HELLO 標題</h1>";

    // echo $text;
    // echo mb_substr($text,0,5,"utf-8");
    echo "<br>";
    // echo strip_tags($text);
    echo mb_substr(strip_tags($text),0,5,'utf-8');
    echo "<br>";
    $string = "（中央社記者龍柏安台北23日電）
    丹佛金塊後衛莫瑞今天在NBA西區決賽第3節，
    因右肘擊中洛杉磯湖人隊球星詹姆斯的下巴，
    讓他領到一次一級惡意犯規，賽後詹姆斯大器地表示：
    「我認為他不是故意的。」賽前在NBA美國職籃西部決賽陷入0比2落後的金塊，今天靠著莫瑞（Jamal Murray）在第4節飆進2顆超高難度三分球、獨拿10分帶領下，終場114比106擊敗西部頭號種子湖人，系列賽勝場開張。";
    echo nl2br($string);
    // echo $string;
