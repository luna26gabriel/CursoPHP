<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php

if(isset($_POST['busca'])){
    // echo strip_tags($_POST['busca'], "<strong>");   retira as tags, depois da VIRGULA é o filtro
    echo htmlentities($_POST['busca']); //faz as tags vivarem strings
    
    
}

?>