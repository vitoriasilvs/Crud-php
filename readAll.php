<?php
// importa o arquivo de conexão com MySQL
  include_once("conect.php");

// importa o arquivo da classe Crud
include_once("Crud.php");

$obj = new Crud($conect);

$dados = $obj->getAll();

// var_dump($dados);

echo "<link rel='stylesheet' type='text/css' href='css/estilo.css'>";

echo "<main>";
echo "<header> Selecione um registro para alterar </header>";

echo "<table border='1'>";
echo "<tr><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th><th> Editar </th></tr>";
 foreach ($dados as $info) {
      echo"<tr>
      <td>".$info->nome."</td>
       <td>".$info->idade."</td>
       <td>".$info->email."</td>
       <td>".$info->data_now."</td>
       <td><a href=formEdit.php?id=".$info->id.">Editar </a> </td> </tr>";

}

 echo "</table>";
 echo "</main>";

 ?>