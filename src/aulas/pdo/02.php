<?php

$conn = new PDO("mysql:dbname=dbphp7;host=mysql-phpdev", "root", "senha");

$stmt = $conn->prepare("insert into usuarios (login, senha) values( :LOGIN , :SENHA)");

$login = "Jose";
$senha = "12w212";

$stmt->bindParam(":LOGIN", $login); 
$stmt->bindParam(":SENHA", $senha); 

$stmt->execute();

echo "cadastarado"


?>