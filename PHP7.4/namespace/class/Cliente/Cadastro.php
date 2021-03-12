<?php 

namespace Cliente;

class Cadastro extends \Cadastro{

    public function registrarVenda(){
        echo "Registro Completo do Cliente: " . $this->getNome();
    }

}


?>