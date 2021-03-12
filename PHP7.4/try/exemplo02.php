 <?php

 function tratarNome($name){

    if (!$name){
        throw new Exception("Nenhum nome foi informado", 1);
        
    }

    echo ucfirst($name). "<br>";

 }
 
 try {

    tratarNome("Gabriel");
    tratarNome("");
    

 } catch ( Exception $e ){

    echo $e->getMessage();

 } finally {

    echo "Executou o Try!";

 }
 
 ?>