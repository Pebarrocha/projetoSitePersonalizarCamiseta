<?php				
	
Class cadastroClienteModel{		

public function incluirProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco){	

try{
require_once 'conexaomysql.php';
$sql = "insert into camisetapredefinida (nome,descricao,tamanho,imagem,sexo,modelo,preco) values ('$nome','$descricao','$tamanho','$imagem','$sexo',
'$modelo','$preco')";

$result = mysqli_query($conexao, $sql);
}catch(Exception $e){
echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
}
}


    public function consultarCliente($sql){
        require_once 'conexaomysql.php';
//        echo '<script> alert("ENTROU NO CONSULTAR! MODEL") </script>';
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