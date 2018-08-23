<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 11/08/2018

Descrição: Controller que receberá os inputs dos formulários e enviará para o model.

-->

<?php

require_once '../model/produtoPreDefinido.php';						
//require_once '../DAO/cadastroDeProdutoPreDefinidoDAO.php';	

function Processo($processo){
		
	switch ($processo){
		
		case 'incluir':	
			//if(isset($_POST['delete_id']) && !empty($_POST['delete_id']))

			/*
				Se o botão hidden 'ok' for true ele entrara no if, e uma variavel receberá todas as informações
				que estavam nas inputs dos formulários HTML. Depois irá criar um objeto da classe cadastroDeProdutoPreDefinidoDAO com todas as váriaveis, e irá ativar a função no MODEL
			 */
			if (isset($_POST['ok']) && !empty($_POST['ok'])){
				//$sigla = ($_POST['sigla']);
				$nome = ($_POST['nome']);		
				$descricao = ($_POST['descricao']);	
				$tamanho = ($_POST['tamanho']);
				$sexo = ($_POST['sexo']);
				$modelo = ($_POST['modelo']);
				$preco = ($_POST['preco']);

				$pDAO = new cadastroDeProdutoPreDefinidoDAO();
				$pDAO->incluirProdutoPreDefinido($nome,$descricao,$tamanho,$sexo,$modelo,$preco);		
				echo '<script>alert("Cadastrado com sucesso !");</script>';
				//echo '<script>window.location="../VIEW/cadastroProdutoPreDefinidoVIEW.php";</script>';
			}
		break;

	}
	
	}

?>