<?php

require_once ('../model/conexaomysql.php');

session_start();

if(isset($_POST['btn-entrar'])):

	$erros = array();
	$cpf = mysqli_escape_string($conexao, $_POST['cpf']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(empty($cpf) or empty($senha)):
		$erros[] = "<li> O campo LOGIN/SENHA precisa ser preenchido <li>";
else:

$sql = "SELECT cpf FROM funcionario WHERE cpf = '$cpf'";

$resultado = mysqli_query($conexao, $sql);


	if(mysqli_num_rows($resultado) > 0):

		$sql = "SELECT * FROM funcionario WHERE cpf = '$cpf' AND senha = '$senha'";
		
		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado)==1):

			$dados = mysqli_fetch_array($resultado);
			$_SESSION['logado'] = true;
			$_SESSION['id_usuario'] = $dados['id'];
			header('Location: admVIEW.php');
		else:
			$erros[] = "<br><br><li> Usuário ou Senha não conferem </li>";
		endif;
		else:
			$erros[] = "<br><br><li> Usuário inexistente </li>";
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
		<link rel="stylesheet" type="text/css" href="css/loginPainel.css">
	</head>

<body>		


<img class="teste" src="a.jpg">
		<br><br><div id=corpo>
				<h1> LOGIN</h1>
				<?php
				if(!empty($erros)):

					foreach($erros as $erro):
					echo $erro;
				endforeach;
			endif; 
?>
<br><hr>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br><br>
				<label>CPF:</label> 
				<input type="text2" name="cpf" id="cpf" placeholder="Digite seu E-MAIL..."><br><br>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" placeholder="Senha"><br><br>

				<br><br>
			
				<button type="submit" name="btn-entrar" id="btn-entrar"> ENTRAR</button> 
				</form>					
			</div>



	</body>
</html>