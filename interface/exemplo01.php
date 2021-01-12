<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);

}

class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até " . $velocidade . "<br>";
    }

    public function frenar($velocidade){
        echo "O veiculo frenou até " . $velocidade . "<br>";
    }

    public function trocaMarcha($marcha){
        echo "A marcha atua é " . $marcha . "<br>";
    }

}

$carro = new Civic();
$carro->trocaMarcha(2);
$carro->acelerar(100);
$carro->trocaMarcha(5);
$carro->frenar(30);
$carro->trocaMarcha(3);

?>