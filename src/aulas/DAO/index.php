<?php 

require_once("config.php");



//carrega 1 usuário
//$usuario  = New Usuario();
//$usuario->loadById(3);

//Tras todos os registros
// $lista = Usuario::getList();
// echo json_encode($lista);

// $busca = Usuario::busca("r");
// echo json_encode($busca);

//carrrega usuário logado
// $usuario = new Usuario();

// $usuario->login("Jose", "12w212" );

//echo $usuario;

$aluno = new Usuario("Batata", "Quente");


$aluno->insert();

echo $aluno;




?>