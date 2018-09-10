<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

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
foreach($_POST as $nome_campo => $valor){ 
$comando = "\$" . $nome_campo . "='" . $valor . "';"; 
//echo $comando;
eval($comando); 
$nome_campo = str_replace(",",".", $nome_campo);
}			

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
echo $comando;
eval($comando); 
$nome_campo = str_replace(",",".", $nome_campo);
}		

if(isset($tipo) != null || $edconsulta != null){
$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida WHERE $tipo = '$edconsulta' ";
$cDAO = new produtoPreDefinidoMODEL();
$rs = $cDAO->consultarProdutoPreDefinido($sql);

}else{
$sql = "SELECT codCamisetaPreDefinida,nome,descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida";
$cDAO = new produtoPreDefinidoMODEL();
$rs = $cDAO->consultarProdutoPreDefinido($sql);

}
}
			
if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
echo '<script>alert("Entrou no botao excluir"); </script>';
$id = $_GET['id'];
$eDAO = new produtoPreDefinidoMODEL();
$eDAO->deletarProdutoPreDefinido($id);
echo '<script>window.location="consultaProdutoPreDefinidoVIEW.php";</script>';
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
eval($comand); 
$nome_campo = str_replace(",",".", $nome_campo);
}		
$aDAO->alterarProdutoPreDefinido($nome,$descricao,$tamanho,$imagem,$sexo,$modelo,$preco);
echo '<script>window.location="consultaProdutoPreDefinidoVIEW.php";</script>';
}
break;
}
}
?>