<?php 

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Gabriel',
    'idade'=>20
));

array_push($pessoas, array(
    'name'=>'Anna',
    'idade'=>11
));

echo json_encode($pessoas);


?>