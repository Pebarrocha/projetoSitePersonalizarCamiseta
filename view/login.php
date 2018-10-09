<?php

require_once ('../model/conexaomysql.php');

session_start();

if(isset($_POST['btn-entrar'])):

	$erros = array();
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(empty($email) or empty($senha)):
		$erros[] = "<li> O campo LOGIN/SENHA precisa ser preenchido <li>";
else:

$sql = "SELECT email FROM cliente WHERE email = '$email'";

$resultado = mysqli_query($conexao, $sql);


	if(mysqli_num_rows($resultado) > 0):

		$sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
		echo $sql;
		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado)==1):

			$dados = mysqli_fetch_array($resultado);
			$_SESSION['logado'] = true;
			$_SESSION['id_usuario'] = $dados['id'];
			header('Location: admVIEW.php');
		else:
			$erros[] = "<li> Usuário e Senha não conferem </li>";
		endif;
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

<li><a href="main.php">Início</a>
<li><a id = "sexo" name="masculino" value="masculino" onclick="submitPesquisaMasculina()">Camisetas Masculinas
<input type="hidden" id="btnconsultamasculina" name="btnconsultamasculina" ></a>

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
<hr>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br><br>
				<label>EMAIL:</label> 
				<input type="text2" name="email" id="email" placeholder="Digite seu E-MAIL..."><br><br>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" placeholder="Senha"><br><br>

				<div id=label> <p> <a href="recuperacao.php" style="color:white">ESQUECI MINHA SENHA</a>  | <a href="cadastroClienteVIEW.php" style="color:white">CADASTRAR-SE</a></p></div><br><br>
				<button type="submit" name="btn-entrar" id="btn-entrar"> ENTRAR</button> 
				</form>					
			</div>

<footer>
	<div id=fim>

</div>
</footer>

	</body>
</html>