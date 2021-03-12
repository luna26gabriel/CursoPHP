<?php 

echo "<select>";

for ($i = date("Y"); $i >= date("Y")-300; $i--) { 
    echo $i . " ";

    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>