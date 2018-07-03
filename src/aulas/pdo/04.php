<?php

$conn = new PDO("mysql:dbname=dbphp7;host=mysql-phpdev", "root", "senha");

$stmt = $conn->prepare("delete from usuarios where  id = :ID ");


$id = 2;


$stmt->bindParam(":ID", $id); 

$stmt->execute();

echo "deletado"


?>