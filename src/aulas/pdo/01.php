<?php

$conn = new PDO("mysql:dbname=dbphp7;host=mysql-phpdev", "root", "senha");

$stmt = $conn->prepare("select * from usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo "<strong>".$key.":</strong>".$value."<br>";
    }

    echo "==================================================== <br>"; 

};




?>