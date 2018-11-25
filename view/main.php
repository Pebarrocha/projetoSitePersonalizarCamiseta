<!--Autor: Felipe Santiago Procópio-->
<!-- Data da última modificação: 28/08/2018-->
<!---->
<!--Descrição: Formulário para cadastro de cliente que efetuarão compras no site. -->
<!--Esse formulário está na pasta VIEW. Ele controla apenas o visual e as entradas-->
<!--digitadas pelo usuário na hora do cadastro.-->

<!DOCTYPE html>

<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/cliente.css">
		<title>Cadastro de clientes</title>

		<style type="text/css">
		
		</style>

	</head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<input type="button" class="login" value="Carrinho de Compras">
<input type="button" class="login" value="Minha Conta">
<input type="button" class="login" value="Entrar" onclick="location. href='login.php'">
</form>
</ul>
</nav>
</header>


<body>		

	<img class="teste" src="a.jpg">
	<nav class="navegacao">
	<form id="formmain">
<ul>

<li><a href="main.php">INICIO</a>
<li><a href="#">CAMISETAS MASCULINAS</a>
<li><a href="#">CAMISETAS FEMININAS</a>
<input type="hidden" id="btnconsultafeminina" name="btnconsultafeminina"></a>

<li><a href="#">CONTATO</a>
<li><a href="#">SOBRE</a>
</ul>
</form>
</nav>


<?php
require'../model/conexaomysql.php';

$sql = "SELECT * FROM camisetapredefinida";
$qr = mysqli_query($conexao, $sql) or die(mysqli_error());

while($ln = mysqli_fetch_assoc($qr)) {
    $varImg = $ln['imagem'];
    echo '<h2>' . $ln['nome'] . '</h2>
';
    echo 'Tamanho: ' . $ln['tamanho'].'<br>
';
    echo 'Descrcrição: ' . $ln['descricao'].'<br>
';
    echo 'Sexo: ' . $ln['sexo'].'<br>
';
    echo 'modelo: ' . $ln['modelo'].'<br>
';    
	echo 'Preço : R$ ' . number_format($ln['preco'], 2, ',', '.') . '<br>
';
    echo "<td>  <img border=0 height='63px' src='data:image/jpeg;base64,$varImg'> </td>";

    echo '<a href="carrinho.php?acao=add&id=' . $ln['codCamisetaPreDefinida'] . '">Comprar</a>';
    echo '
<hr />
';
}

?>


















		
			<script type="text/javascript" src="../js/validacaoCliente.js"> </script>

				<!--Script (javascript) para submeter as informações resgatadas nos inputs 
				Ele pega os ids 'ok' e 'form' e trabalha com eles. O elemento ok é passado a ser true, enquanto
				o elemento de id 'form' é submetido-->
			<script type="text/javascript">

				
				function submitForm(){	
					//validaCadastro();	
					alert("Teste view");		
					document.getElementById("ok").value = "true";					
					document.getElementById("form").submit();
					//document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
			}		
			</script>





	</body>
</html>