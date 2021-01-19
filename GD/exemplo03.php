<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",     "CERTIFICADO");
imagettftext($image, 40, 0, 240, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",    "Batata");
imagestring($image, 3, 240, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>