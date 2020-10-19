<?php
    $img = "images/001.jpg";
    $canvas = imagecreatefromjpeg($img);
    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);
    // echo $canvas_w,$canvas_h;

    $new_w = 358;
    $new_h = $canvas_h / $canvas_w * $new_w;

    $new_canvas = imagecreatetruecolor($new_w,$new_h);

    imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);

    imagejpeg($new_canvas,"images/002.jpg");
