<?php 

$pessoa = array(
    'nome'=>'Gabriel',
    'idade'=>20
);

foreach ($pessoa as &$value) {

    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
};

var_dump($pessoa);

?>