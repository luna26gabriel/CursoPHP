<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 240, 350, "Batatinha", $titleColor);
imagestring($image, 3, 240, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);

imagedestroy($image);

?>