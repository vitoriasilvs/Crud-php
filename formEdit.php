<?php 

$id = $_GET['id'];

// importa o arquivo de conexão com MySQL
  include_once("conect.php");

// importa o arquivo da classe Crud
include_once("Crud.php");

$obj = new Crud($conect);

$dados = $obj->readInfo($id);

// var_dump($dados);

?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<main>
	<header> Altere os campos necassários </header>
 
<form action="update.php" method="post">
	<p> Nome: <input type="text" name="pessoa" value="<?=$dados[0]->nome;?>"> </p>
	<p> Idade: <input type="number" name="idade" value="<?=$dados[0]->idade;?>"> </p>
	<p> E-mail: <input type="email" name="email" value="<?=$dados[0]->email;?>"> </p>
	<input type="hidden" name="id" value="<?=$dados[0]->id;?>">
	<p> <button type="submit"> Alterar dados </button> </p>
</form>
</main>
