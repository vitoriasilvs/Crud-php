<?php 
// importa o arquivo de conexão com MySQL
  include_once("conect.php");

// importa o arquivo da classe Crud
include_once("Crud.php");

// $obj = new Crud($conect);

// $dado = $obj->readInfo(2);

// // var_dump($dado);

// echo $dado->id."-".$dado->nome."-".$dado->idade."-".$dado->email."-".$dado->data_now;

// $obj->readInfo();

// $dado = $obj->getAll();

// var_dump($dado);

// foreach($dado as $info){
//   echo $info['id']."-". $info['nome']."-". $info['idade']."-". $info['email']. "-".$info['data_now']."<br>";
// }

// echo "<table border='1'>";
// echo "<tr><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th></tr>";

// foreach ($dado as $info) {
//   echo"<tr><td>".$info['nome']."</td>
//        <td>".$info['idade']."</td>
//        <td>".$info['email']."</td>
//        <td>".$info['data_now']."</td></tr>";

//  }

$nome= $_POST['nome'];


$obj = new Crud($conect);

$dado = $obj->readInfoAll($nome);

// var_dump($dado);



echo "<table border='1'>";
echo "<tr><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th></tr>";
 foreach($dado as $info) {

      echo"<tr><td>".$info->nome."</td>
       <td>".$info->idade."</td>
       <td>".$info->email."</td>
       <td>".$info->data_now."</td></tr>";
}

 echo "</table>";



?>