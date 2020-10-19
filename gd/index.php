<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $black = imagecolorallocate($canvas,0,0,0);

    imagefill($canvas,0,0,$blue);

    // header("content-type:image/jpeg");
    // imagejpeg($canvas);
    header("content-type:image/png");
    imagepng($canvas);
    // header("content-type:image/gif");
    // imagegif($canvas);