<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Apagados";


?>

