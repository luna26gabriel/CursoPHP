<?php 

function soma(float ...$valores):float{

    return array_sum($valores);

}

echo var_dump(soma(2, 2, 2, 2, 2, 2));
echo "<br>";
echo soma(20, 25);
echo "<br>";
echo soma(1.5, 6.5);

?>