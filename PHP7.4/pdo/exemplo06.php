<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 9;

$stmt->execute(array(
    $id
));

//$conn->rollback();
$conn->commit();

echo "Dados Apagados";


?>

