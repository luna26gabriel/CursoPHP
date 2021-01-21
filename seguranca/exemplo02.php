<?php
/*     --------CODIGO ANTES DE SER CONFIGURADO PARA TER MAIS SEGURANÇA

$id = (isset($_GET['id']))?$_GET['id']:1;

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->deslogin . "<br>";
}
*/

$id = (isset($_GET['id']))?$_GET['id']:1;

if(!is_numeric($id) || strlen($id) > 5 ){
    exit("Nana nina não!!!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->deslogin . "<br>";
}


?>