<?php

$conn = new PDO("mysql:dbname=dbphp7;host=mysql-phpdev", "root", "senha");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from usuarios where  id = ? ");


$id = 1;


$stmt->execute(array($id));

$conn->commit();

echo "deletado"


?>