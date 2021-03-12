<?php 

$json = '[{"nome":"Gabriel","idade":20},{"name":"Anna","idade":11}]';

$data = json_decode($json, true);

var_dump($data);


?>