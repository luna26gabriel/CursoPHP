<?php

function test($callback){

    //PROCESSO

    $callback();

}

test(function(){
    echo "Terminou";
});


?>