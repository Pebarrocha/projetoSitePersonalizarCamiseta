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
		
		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado)==1):

			$dados = mysqli_fetch_array($resultado);
			$_SESSION['logado'] = true;
			$_SESSION['id_usuario'] = $dados['id'];
			header('Location: admVIEW.php');
		else:
			$erros[] = "<br><li> Usuário ou Senha não conferem </li>";
		endif;
		else:
			$erros[] = "<br><li> Usuário inexistente </li>";
		endif;
endif;
endif;
?>

<!DOCTYPE html>

<html>
	<head lang="pt-br">
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/loginPainel.css">

		<style>.teste{height: 800px; background-color: #88c3e0; margin: 0px; padding: 0%;}
           .teste1{height: 30px; background-color: #424b54; margin: 0px; padding: 0%;}
           .main{width: 100%;}
  		</style>
	</head>

<header>

<nav class="navegacao" >

</nav>
</header>


<body>		


<img class="teste" src="a.jpg">
		<br><br><br><div id=corpo>
				<h1> LOGIN ADMINISTRATIVO</h1>
				<?php
				if(!empty($erros)):

					foreach($erros as $erro):
					echo $erro;
				endforeach;
			endif; 
?>
<br><hr>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br><br>
				<label>EMAIL:</label> 
				<input type="text2" name="email" id="email" placeholder="Digite seu E-MAIL..."><br><br>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" placeholder="Senha"><br><br>
				<button type="button2" name="btn-entrar" id="btn-entrar">ENTRAR</button> 
				</form>					
			</div>


	</body>
</html>