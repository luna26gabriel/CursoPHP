<?php

$images = scandir("images");

$data = array();

//var_dump($images);

foreach($images as $name){
    if(!in_array($name, array(".", ".."))) {  
        $filename = "images" . DIRECTORY_SEPARATOR . $name;
        $info = pathinfo($filename); 

        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/DIR/" . str_replace("\\","/", $filename);

        array_push($data, $info);     
        
    }
}

echo json_encode($data);

?>