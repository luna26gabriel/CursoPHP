<?php 

setlocale(LC_ALL, "pt_BR", "pt_BR,utf-8", "portuguese");

$ts = strtotime("+1 month");

echo $ts;

echo "<br>";

echo ucwords(strftime("%B", $ts));

?>