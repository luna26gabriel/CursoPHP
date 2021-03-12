<?php

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $password);

$login = "user";
$password = "123";

$stmt->execute();

$login = "root";
$password = "jose";

$stmt->execute();

?>