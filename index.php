<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;


//Carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de ususrios buscando pleo lgin

//$search = Usuario::search("oo");

//echo json_encode($search);

//carrega um usuario usando login e senha

//$usuario = new Usuario();
//$usuario->login("moraeslitz","uyhbdwe");

//echo $usuario;
// Insert novo usuario, não funcionou!
//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;


$usuario = new Usuario();

$usuario->loadById(35);

$usuario->update("professor", "&%#%¨&$");

echo $usuario;

?>