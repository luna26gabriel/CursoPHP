<?php

$file = fopen("text.txt", "w+");

fclose($file);

unlink("text.txt");

echo "Arquivo Removido com sucesso";

?>