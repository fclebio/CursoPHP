<?php

$conn = new mysqli("mysql-phpdev", "root", "senha", "dbphp7");

if($conn->connect_error){

    echo "Error :" . $conn->connect_error ;  

}

$result = $conn->query("Select * from usuarios order by login");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);
    
}

echo json_encode($data);

?>