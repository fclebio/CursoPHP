<?php

$conn = new PDO("mysql:dbname=dbphp7;host=mysql-phpdev", "root", "senha");

$stmt = $conn->prepare("update usuarios set login = :LOGIN , senha = :SENHA where id = :ID ");

$login = "Franci";
$senha = "3333";
$id = 2;

$stmt->bindParam(":LOGIN", $login); 
$stmt->bindParam(":SENHA", $senha); 
$stmt->bindParam(":ID", $id); 

$stmt->execute();

echo "alterado"


?>