<?php 

abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e ". parent::mover();
    }
}


$cao = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo $cao->falar(). "<br>";
echo $cao->mover(). "<br>";

echo $gato->falar(). "<br>";
echo $gato->mover(). "<br>";

echo $passaro->falar(). "<br>";
echo $passaro->mover(). "<br>";

?>