<?php

//$ts = strtotime("2000-02-26");

$ts = strtotime("+1 year");

$date = date("l d/m/Y", $ts);

echo $date;

?>