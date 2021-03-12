<?php 

session_id('hvagnf5cme13ejcn272uamk1s1');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

?>