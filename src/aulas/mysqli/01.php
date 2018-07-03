<?php

$conn = new mysqli("mysql-phpdev", "root", "senha", "dbphp7");

if($conn->connect_error){

    echo "Error :" . $conn->connect_error ;  

}

$stmt = $conn->prepare("insert into usuarios (login, senha ) values ( ?, ? )");

$stmt->bind_param("ss", $user, $pass);

$user = "user";
$pass = "12345";

$stmt->execute();

$user = "root";
$pass = "123!@#$%45";

$stmt->execute();



?>