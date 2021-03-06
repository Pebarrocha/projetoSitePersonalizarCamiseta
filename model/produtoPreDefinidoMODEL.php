<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

Descrição: Classe para incluir o produto pré definido no banco de dados.
Primeiro é estabelecida a conexão com o banco, logo após é criada a consulta no banco que será inserir os dados no banco.
-->

<?php				
	
Class produtoPreDefinidoMODEL{		

public function incluirProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco){

    header('Content-Type: text/html; charset=utf-8');
    $nometemp = $_FILES['imagem']["tmp_name"];
    $nomereal=$_FILES["imagem"]["name"];
    copy($nometemp,$nomereal);
    $data   = fopen($nomereal, 'r');
    $size   = filesize($nomereal);
    $contents= fread($data, $size);
    fclose($data);
    $imagestring =  base64_encode($contents);

try{
require_once 'conexaomysql.php';

$sql = "insert into camisetapredefinida (nome,descricao,tamanho,imagem,sexo,modelo,preco) values ('$nome','$descricao','$tamanho','$imagestring','$sexo',
'$modelo','$preco')";

$result = mysqli_query($conexao, $sql);
}catch(Exception $e){
echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
}
}


public function consultarProdutoPreDefinido($sql){
require_once 'conexaomysql.php';
$result = mysqli_query($conexao,$sql);	
return $result;			
}

public function alterarProdutoPreDefinido($nome, $descricao, $tamanho,$imagem,$sexo,$modelo,$preco){
try{
require 'conexaomysql.php';
$sql = 'update camisetapredefinida set nome="' .$nome.  ' ", descricao="'. $descricao . '", tamanho = " '. $tamanho .' ",
imagem = "'. $imagem .'", sexo=" '. $sexo .' ", modelo = "'.$modelo.'", preco="'.$preco.'" WHERE codCamisetaPreDefinida="' . $_GET["id"] . '"';
$result = mysqli_query($conexao,$sql);		
}catch(Exception $e){
echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
}
}

public function deletarProdutoPreDefinido($id){
try{
require_once 'conexaomysql.php';
$sql = "delete from camisetapredefinida WHERE codCamisetaPreDefinida = $id";
$result = mysqli_query($conexao,$sql);
echo '<script> alert("Conteudo Excluido com sucesso") </script>';
}catch(Exception $e){
echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
}
}
}
?>