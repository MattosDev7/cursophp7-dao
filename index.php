<?php

require_once("config.php");

//Carrga um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usuando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;

/*
Criando um novo usuaio
$aluno = new Usuario("aluno", "senha0");
$aluno->insert();
echo $aluno;*/
/*
Alterando usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$69");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;
?>