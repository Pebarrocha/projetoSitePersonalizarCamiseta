<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

Descrição: Classe para incluir o produto pré definido no banco de dados.
Primeiro é estabelecida a conexão com o banco, logo após é criada a consulta no banco que será inserir os dados no banco.
-->

<?php				
	
	Class produtoPreDefinidoMODEL{		

		public function incluirProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco){	

			try{
			
			require_once 'conexaomysql.php';
			
			$sql = "insert into camisetapredefinida (nome,descricao,tamanho,imagem,sexo,modelo,preco) values ('$nome','$descricao','$tamanho','$imagem','$sexo',
			'$modelo','$preco')";
			
			//$sql = "insert into estado (sigla,nome)values('$sigla','$nome')";
			$result = mysqli_query($conexao, $sql);
				
			/*if(!$result){ 	 	
		 	 echo pg_last_error($conexao);
			} else {
		 	 echo "Updated successfully";
			}		*/
			}catch(Exception $e){
				echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
			}
		
		}

	public function consultarProdutoPreDefinido($sql){
		require_once 'conexaomysql.php';
		echo '<script> alert("ENTROU NO CONSULTAR! MODEL") </script>';
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

	public function deletarProdutoPreDefinido($sql){
		try{
			require_once 'conexaomysql.php';
			$result = mysqli_query($conexao,$sql);
			echo '<script> alert("Conteudo Excluido com sucesso") </script>';
		}catch(Exception $e){
			echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
		}


	}
}
?>