<?php

$text = "text.txt";
$filename = "textos" . DIRECTORY_SEPARATOR . $text;
$file = fopen($filename, "a+");

fwrite($file, "\r\n" . date("d/m/Y H:i:s")." :: Ola eu me chamo Gabriel, esse texto foi criado nesse dia ". date("d/m/Y"));

fclose($file);

echo "Arquivo Criado com sucesso";

?>