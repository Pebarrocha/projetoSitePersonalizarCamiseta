<?php

require_once '../model/produtoPreDefinido.php';						
//require_once '../DAO/cadastroDeProdutoPreDefinidoDAO.php';	

function Processo($processo){
		
	switch ($processo){
		
		case 'incluir':	
			//if(isset($_POST['delete_id']) && !empty($_POST['delete_id']))

			if (isset($_POST['ok']) && !empty($_POST['ok'])){
				$sigla = ($_POST['sigla']);
				$nome = ($_POST['nome']);			

				$pDAO = new cadastroDeProdutoPreDefinidoDAO();
				$pDAO->incluirProdutoPreDefinido($sigla,$nome);		
				echo '<script>alert("Cadastrado com sucesso !");</script>';
				echo '<script>window.location="../VIEW/cadastroProdutoPreDefinidoVIEW.php";</script>';
			}
		break;

	}
	
	}

?>