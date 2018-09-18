<!--
 Autor: Felipe Santiago Procópio
 Data da última modificação: 18/09/2018

Descrição: Controller que receberá os inputs dos formulários e enviará para o model.

-->

<?php


require_once '../model/cadastroClienteModel.php';						
	

function Processo($processo){
		
switch ($processo){
		
case 'incluir':	


if (isset($_POST['ok']) && !empty($_POST['ok'])){
foreach($_POST as $nome_campo => $valor){ 
$comando = "\$" . $nome_campo . "='" . $valor . "';"; 
//echo $comando;
eval($comando); 
$nome_campo = str_replace(",",".", $nome_campo);
}			

$pDAO = new cadastroClienteModel();
$pDAO->cadastrarCliente($nome,$rua,$numero,$bairro,$cidade,$cep,$descricao);		
echo '<script>alert("Cadastrado com sucesso !");</script>';
echo '<script>window.location="../VIEW/cadastroDeCliente.php";</script>';
}
break;

//case 'consultar':
//global $rs;

//if (isset($_POST['btnconsulta']) && !empty($_POST['btnconsulta'])){
//foreach($_POST as $nome_campo => $valor){ 
//$comando = "\$" . $nome_campo . "='" . $valor . "';"; 
//echo $comando;
//eval($comando); 
//$nome_campo = str_replace(",",".", $nome_campo);
//}		

/**if(isset($nome) != null || $rua != null || $numero != null || $bairro != null || $cidade != null || $cep != null || $descricao != null){
$sql = "SELECT nome, descricao,tamanho,imagem,sexo,modelo,FotoCamiseta_codFotoCamiseta,preco FROM camisetapredefinida WHERE $tipo = '$edconsulta' ";
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
break;**/
//}
//}
?>