<?php 

require_once("config.php");

$usuario  = New Usuario();

$usuario->loadById(3);

echo $usuario;


?>