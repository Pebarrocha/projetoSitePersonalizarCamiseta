

<?php

require_once '../model/cadastroClienteModel.php';						
	
function Processo($processo){
		

switch ($processo){
		
case 'incluir':	
//echo "<script>alert('entrou controllser');</script>";
if (isset($_POST['ok']) && !empty($_POST['ok'])){
foreach($_POST as $nome_campo => $valor){ 
$comando = "\$" . $nome_campo . "='" . $valor . "';"; 
//echo $comando;
eval($comando); 
$nome_campo = str_replace(",",".", $nome_campo);
}			

$pDAO = new cadastroClienteModel();
$pDAO->cadastrarCliente($nome,$cpf, $rg, $celular, $fixo,$rua,$numero,$bairro,$cidade,$cep,$descricao, $email, $senha);		
echo '<script>alert("Cadastrado com sucesso !");</script>';
//echo '<script>window.location="../VIEW/cadastroDeCliente.php";</script>';
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
$sql = "SELECT nome, cpf, rg, celular, fixo, rua, numero, bairro, cidade, cep, descricao, email, senha FROM cliente WHERE $tipo = '$edconsulta' ";
$cDAO = new cadastroClienteModel();
$rs = $cDAO->consultarCliente($sql);

}else{
$sql = "SELECT nome, cpf, rg, celular, fixo, rua, numero, bairro, cidade, cep, descricao, email, senha FROM cliente";
$cDAO = new cadastroClienteModel();
$rs = $cDAO->consultarCliente($sql);

}
}
			
if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
echo '<script>alert("Entrou no botao excluir"); </script>';
$id = $_GET['id'];
$eDAO = new cadastroClienteModel();
$eDAO->deletarCliente($id);
echo '<script>window.location="consultaProdutoPreDefinidoVIEW.php";</script>';
}
break;

case 'alterar':
global $rs;			
$sql = 'SELECT nome, cpf, rg, celular, fixo, rua, numero, bairro, cidade, cep, descricao, email, senha
FROM cliente
WHERE codCliente ="' . $_GET["id"] . '"';
$aDAO = new cadastroClienteModel();
$rs = $aDAO->consultarCliente($sql);					
if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
foreach($_POST as $nome_campo => $valor){ 
$comand = "\$" . $nome_campo . "='" . $valor . "';"; 
eval($comand); 
$nome_campo = str_replace(",",".", $nome_campo);
}		
$aDAO->alterarCliente($nome,$cpf, $rg, $celular, $fixo,$rua,$numero,$bairro,$cidade,$cep,$descricao, $email, $senha);
echo '<script>window.location="consultaCliente.php";</script>';
}
break;
}
}
?>