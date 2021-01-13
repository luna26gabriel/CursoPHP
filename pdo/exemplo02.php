<?php

$conn = new PDO("sqlsrv:Server=(local);Database=dbphp7",NULL, NULL);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODEE_EXCEPTION);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . "</strong>: " . $value . "<br>";        
    }
    echo "<hr>";
}

//var_dump($results);

?>