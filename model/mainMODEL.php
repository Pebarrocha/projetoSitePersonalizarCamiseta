<?php



Class consultarMain(){

public function consultarPrincipal($nome){

require_once('conexao.php');// iniciando a conexao

$sql = "select * from camisetapredefinida where nome = '$nome'";
$result = mysqli_query($conexao,$sql);
return $result;

}//fim do método consultarPrincipal

public function consultarBotao($sexo){
  
require_once('conexao.php');//iniciando a conexao

$sql = "select * from camisetapredefinida where sexo = '$sexo'";
$result = mysqli_query($conexao,$sql);
return $result;
}


}// fim da classe

 ?>
