<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 11/08/2018

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

	public function consultarProdutoPreDefinido(){
		require_once 'conexaomysql.php';
		echo '<script> alert("entrou aqui na classe!") </script>';
		$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida";
		global $result;
		$result = mysqli_query($conexao,$sql);
		global $row;
		
	}	
}

?>