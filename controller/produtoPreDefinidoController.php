<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 11/08/2018

Descrição: Controller que receberá os inputs dos formulários e enviará para o model.

-->



<?php


require_once '../model/produtoPreDefinidoMODEL.php';						
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
				/*
				$nome = ($_POST['nome']);		
				$descricao = ($_POST['descricao']);	
				$tamanho = ($_POST['tamanho']);
				$sexo = ($_POST['sexo']);
				$modelo = ($_POST['modelo']);
				$preco = ($_POST['preco']);
				//$preco = str_replace(",",".", $preco);
				*/
				foreach($_POST as $nome_campo => $valor){ 
				   $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
				   //echo $comando;
				   eval($comando); 
				   $nome_campo = str_replace(",",".", $nome_campo);
				}			
					//$imagem = $_FILES['imagem']['tmp_name'];
					/*
					$tamanho = $_FILES['imagem']['size'];
					$tipo = $_FILES['imagem']['type'];
					$nome = $_FILES['imagem']['name'];
					*/
					//$fp = fopen($imagem, "rb");
					//$conteudo = fread($fp, $tamanho);
					//$conteudo = addslashes($conteudo);
					//fclose($fp);

				$pDAO = new produtoPreDefinidoMODEL();
				$pDAO->incluirProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco);		
				echo '<script>alert("Cadastrado com sucesso !");</script>';
				//echo '<script>window.location="../VIEW/cadastroProdutoPreDefinidoVIEW.php";</script>';
			}
		break;

		case 'consultar';
			
			global $rs;

			if (isset($_POST['btn-consulta']) && !empty($_POST['btn-consulta'])){
				echo '<script> alert("entrou aqui!") </script>';

				$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida";

				$cDAO = new produtoPreDefinidoMODEL();
				$rs = $cDAO->consultarProdutoPreDefinido($sql);
				
				echo '<script>alert("Consultado com sucesso!";</script>';
			}
		break;

	}
	
	}

?>