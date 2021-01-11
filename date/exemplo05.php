<?php

$dt = new DateTime();

$periodo = new DateInterval("P46D");
$periodo2 = new DateInterval("P21Y");

echo $dt->format("d/m/Y H:i");

echo "<br>";

$dt -> add($periodo);
echo $dt->format("d/m/Y H:i");

echo "<br>";

$dt -> sub($periodo2);
echo $dt->format("d/m/Y H:i");

?>