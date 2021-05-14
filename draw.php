<?php

$canvas = imagecreatetruecolor(240,200);

// Allocate colors

$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green= imagecolorallocate($canvas, 132, 135, 28);

// draw three tringles w its own color

imagerectangle($canvas, 50, 50, 170, 170, $pink);
imagerectangle($canvas, 45, 60, 120, 100, $white);
imagerectangle($canvas, 100, 120, 75, 158, $green);

// output and free from memmory 
 
header('Content-type: image/jpeg');

imagejpeg($canvas);
imagedestroy($canvas);

echo "this is drawing program by shlok tomar";  