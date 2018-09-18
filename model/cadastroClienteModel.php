<!--
 Autor: Felipe Santiago Procópio
 Data da última modificação: 18/09/2018

Descrição: Classe para cadastrar clientes.
Primeiro é estabelecida a conexão com o banco, logo após é criada a consulta no banco que será inserir os dados no banco.
-->

<?php				
	
Class cadastroClienteModel{		

public function cadastrarCliente($nome,$cpf, $rg, $celular, $fixo,$rua,$numero,$bairro,$cidade,$cep,$descricao, $email, $senha, $senha2){	

try{
require_once 'conexaomysql.php';
$sql = "insert into cliente (nome, cpf, rg, celular, fixo, rua, numero, bairro, cidade, cep, descricao, email, senha) values ('$nome','$cpf', '$rg', '$celular', '$fixo', '$rua','$numero','$bairro','$cidade', '$cep', '$descricao', '$email', '$senha')";

$result = mysqli_query($conexao, $sql);
}catch(Exception $e){
echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
}
}


//public function consultarProdutoPreDefinido($sql){
//require_once 'conexaomysql.php';
//echo '<script> alert("ENTROU NO CONSULTAR! MODEL") </script>';
//$result = mysqli_query($conexao,$sql);	
//return $result;			
//}

//public function alterarProdutoPreDefinido($nome, $descricao, $tamanho,$imagem,$sexo,$modelo,$preco){
//try{
//require 'conexaomysql.php';
//$sql = 'update camisetapredefinida set nome="' .$nome.  ' ", descricao="'. $descricao . '", tamanho = " '. $tamanho .' ",
//imagem = "'. $imagem .'", sexo=" '. $sexo .' ", modelo = "'.$modelo.'", preco="'.$preco.'" WHERE codCamisetaPreDefinida="' . $_GET["id"] . '"';
//$result = mysqli_query($conexao,$sql);		
//}catch(Exception $e){
//echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
//}
//}

//public function deletarProdutoPreDefinido($id){
//try{
//require_once 'conexaomysql.php';
//$sql = "delete from camisetapredefinida WHERE codCamisetaPreDefinida = $id";
//$result = mysqli_query($conexao,$sql);
//echo '<script> alert("Conteudo Excluido com sucesso") </script>';
//}catch(Exception $e){
//echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
//}
//}
}
//?>