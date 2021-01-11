<?php 

$animais = array(
    'passaro', 
    'voador',
    'elefante',
    'terrestre',
    'tartaruga',
    'marinha',
    'golfinho',
    'marinho'
);

foreach ($animais as $index => $animal){
    echo $animal . ' está localizado no index ' . $index. '<br>';
}

?>