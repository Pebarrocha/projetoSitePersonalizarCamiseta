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
				
				/*
				$nome = ($_POST['nome']);						
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
				echo '<script>window.location="../VIEW/cadastroProdutoPreDefinidoVIEW.php";</script>';
			}
		break;

		case 'consultar':
			
			global $rs;

			if (isset($_POST['btnconsulta']) && !empty($_POST['btnconsulta'])){
				
				foreach($_POST as $nome_campo => $valor){ 
				   $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
				   
				   eval($comando); 
				   $nome_campo = str_replace(",",".", $nome_campo);
				}		

				$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida WHERE $tipo = '$edconsulta' ";
				//$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida WHERE '$tipo' = ''$edconsulta''";
				//$sql = "SELECT codCamisetaPredefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida";
				//$sql = 'SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida
						//WHERE "'. $tipo .'" = ""'. $edconsulta .'"" ';

				$cDAO = new produtoPreDefinidoMODEL();

				$rs = $cDAO->consultarProdutoPreDefinido($sql);

				echo '<script>alert("Consultado com sucesso!";</script>';
			}
		break;

		case 'alterar':
			
			global $rs;			
		
			$sql = 'SELECT nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco
					FROM camisetapredefinida 
					WHERE codCamisetaPreDefinida="' . $_GET["id"] . '"';
			$aDAO = new produtoPreDefinidoMODEL();
			$rs = $aDAO->consultarProdutoPreDefinido($sql);
					
			if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
				
				
				foreach($_POST as $nome_campo => $valor){ 
				   $comand = "\$" . $nome_campo . "='" . $valor . "';"; 
				   //echo $comand;
				   eval($comand); 
				   $nome_campo = str_replace(",",".", $nome_campo);
				}		
				
				//$_POST['preco'] = str_replace(",",".", $_POST['preco']);
				//$aDAO->alterarProdutoPreDefinido($_POST['nome'],$_POST['descricao'],$_POST['tamanho'],$_POST['imagem'],$_POST['sexo'],$_POST['modelo'],$_POST['preco'],$_GET['id']);
				
				$aDAO->alterarProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco);
				echo '<script>window.location="consultaProdutoPreDefinidoVIEW.php";</script>';
			}

		break;

	}
	
	}

?>