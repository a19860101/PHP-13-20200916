<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $black = imagecolorallocate($canvas,0,0,0);

    imagefill($canvas,0,0,$blue);
    imageline($canvas,0,0,800,600,$black);
    imageline($canvas,800,0,0,600,$black);

    imagestring($canvas,1,50,70,"HELLO PHP!!!",$black);
    imagestring($canvas,2,50,90,"HELLO PHP!!!",$black);
    imagestring($canvas,3,50,110,"HELLO PHP!!!",$black);
    imagestring($canvas,4,50,130,"HELLO PHP!!!",$black);
    imagestring($canvas,5,50,150,"HELLO PHP!!!",$black);

    // header("content-type:image/jpeg");
    // imagejpeg($canvas);
    header("content-type:image/png");
    imagepng($canvas);
    // header("content-type:image/gif");
    // imagegif($canvas);