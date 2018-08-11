<?php			

	

	Class cadastroDeProdutoPreDefinidoDAO{		

		public function incluirProdutoPreDefinido($sigla, $nome){	

		require_once 'conexao.php';
			
		$sql = "insert into estado (sigla,nome)values('$sigla','$nome')";
		$result = pg_query($conexao, $sql);
			
		if(!$result){ 	 	
	 	 echo pg_last_error($conexao);
		} else {
	 	 echo "Updated successfully";
		}		
		
		}	

	}
?>