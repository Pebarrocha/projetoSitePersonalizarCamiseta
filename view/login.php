<?php

//Chamando o controller para o envio dos dados
require_once ('../controller/clienteController.php');
//Manda o 'incluir' para o método e entra no switch case


session_start();

if(isset($_POST['button'])):

	$erros = array();
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo LOGIN/SENHA precisa ser preenchido <li>";

else:

$sql = "SELECT login FROM clientes WHERE login = '$login'";
$resultado = mysqli_query($connect, $sql);


	if(mysqli_num_rows($resultado) > 0):



		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;
endif;
endif;


?>

<!DOCTYPE html>

<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<title>Login</title>

		<style type="text/css">
    </script>
		
		</style>
	</head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<input type="button" class="login" value="Carrinho de Compras">
<input type="button" class="login" value="Minha Conta">
<input type="button" class="login" value="Entrar" onclick="location. href='login.php'">
<div id="pesq">
<form id="pesquisa" >
<input type="button" class="botao" value="Pesquisar">
<input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui!">
</form>
</div>
</form>
</ul>
</nav>
</header>


<body>		

	<img class="teste" src="a.jpg">

	<nav class="navegacao">
	<form id="formmain">
<ul>
<!-- FAZENDO A CONSULTA - CONSULTA POR BOTAO INCOMPLETA -->
<li><a href="main.php">Início</a>
<li><a id = "sexo" name="masculino" value="masculino" onclick="submitPesquisaMasculina()">Camisetas Masculinas
<input type="hidden" id="btnconsultamasculina" name="btnconsultamasculina" ></a>
<!-- FAZENDO A CONSULTA - CONSULTA POR BOTAO INCOMPLETA -->
<li><a id = "sexo" name="feminino" value="feminino" onclick="submitPesquisaFeminina()">Camisetas Femininas
<input type="hidden" id="btnconsultafeminina" name="btnconsultafeminina"></a>

<li><a href="#">Contato</a>
<li><a href="#">Sobre</a>
</ul>
</form>
</nav>

		<div id=corpo>
				<h1> LOGIN</h1>
				<?php
				if(!empty($erros)):

					foreach($erros as $erro):
					echo $erro;
				endforeach;
			endif; 
				?>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form" id="form" method="post"><br><br>
				<label>EMAIL:</label> 
				<input type="text2" name="email" id="email" placeholder="Digite seu E-MAIL..."><br><br>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" placeholder="Senha"><br><br>

				<div id=label> <p> <a href="recuperacao.php" style="color:white">ESQUECI MINHA SENHA</a>  | <a href="cadastroClienteVIEW.php" style="color:white">CADASTRAR-SE</a></p></div><br><br>

				<input type="submit" name="button" id="button" value="ENTRAR" onclick="submitForm()">
				<input type="hidden" name="ok" id="ok">	
		
		</form>					
			</div>

<footer>
	<div id=fim>

</div>
</footer>

	</body>
</html>