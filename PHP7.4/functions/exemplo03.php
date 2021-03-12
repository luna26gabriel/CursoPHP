<?php 

function ola($texto = "a", $periodo="Bom Dia"){

    return "Olá $texto, $periodo<br>";

}

echo ola("mundo");
echo ola("Luna", "Boa Tarde");
echo ola("", "Boa Noite");
echo ola();

?>