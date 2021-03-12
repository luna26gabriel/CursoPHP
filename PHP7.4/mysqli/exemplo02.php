<?php

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//     ou pode usar o fetch_assoc para esse metudo
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    
    array_push($data, $row);
    
}

foreach ($data as $row) {
    foreach ($row as $index => $value){
        echo "<strong>" . $index . "</strong>: " . $value . "<br>";
    }
    echo "<hr>";
}

// echo $data[1]['deslogin'];

//echo json_encode($data);

?>