<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);

}

abstract class Automovel implements Veiculo{

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

?>