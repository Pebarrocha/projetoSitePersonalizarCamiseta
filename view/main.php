<!DOCTYPE html>

<?php

require_once '../model/conexaomysql.php';


// faço a consulta
$sql = 'SELECT nome,descricao,imagem,preco FROM camisetapredefinida';

//executo a consulta
$dados = mysqli_query($conexao,$sql);

//transformo em um array
$linha = mysqli_fetch_assoc($dados);

//vejo o total de dados que retornaram
$total = mysqli_num_rows($dados);

//Pegando os nomes dos campos
//$num_fields = mysqli_num_fields($sql);//Obtém o número de campos do resultado
//
?>



<html>
	<head lang="pt-br">
		<title>Site de personalização de camisetas </title>
		<meta charset="pt-br">
		<link rel ="stylesheet" type="text/css" href="css/main-estilo.css?09062018">
		
		
	</head>

	<body>
	
		<nav class="navegacao" >
			<ul>				
				<form class="pesquisa">
					<input type="button" class="login" value="Carrinho de Compras">
					<input type="button" class="login" value="Minha Conta">
					<input type="button" class="login" value="Entrar">
						<div id="pesq">
							<form id="pesquisa" >
								<input type="button" class="botao" value="Pesquisar">
								<input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui!"> 
				    		</form>
						</div>
				</form>					
			</ul>
		</nav>
	
		
		<header>
			<p>Cabeçalho (Imagem do site)</p>
		</header>
	
		
		<nav class="navegacao">
			<ul>
				<li><a href="#">Camisetas Masculinas</a>
				<li><a href="#">Camisetas Femininas</a>	
				<li><a href="#">Contato</a>	
				<li><a href="#">Sobre</a>		
							
			</ul>

		</nav>

					

		<section class="produtos">		
			
			<?php
			/*
				echo 
					"<table border=1>
					<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Descricao</th>
					<th>Tamanho</th>
					<th>Imagem</th>
					<th>Sexo</th>
					<th>Modelo</th>
					<th>Foto Camiseta</th>
					<th>Preco</th>
					</tr>";

					while($row = mysqli_fetch_array($dados)){
						
						echo "<tr>";
						echo "<td>" . $row['codCamisetaPreDefinida'] . "</td>";
						echo "<td>" . $row['nome'] . "</td>";
						echo "<td>" . $row['descricao'] . "</td>";
						echo "<td>" . $row['tamanho'] . "</td>";
						echo "<td>" . $row['imagem'] . "</td>";
						echo "<td>" . $row['sexo'] . "</td>";
						echo "<td>" . $row['modelo'] . "</td>";
						echo "<td>" . $row['FotoCamiseta_codFotoCamiseta'] . "</td>";
						echo "<td>" . $row['preco'] . "</td>";		
						echo "</tr>";			
					}
					echo "</table>";
					*/
			?>		
			<?php
				while ($row = mysqli_fetch_array($dados)){
				echo "<article>";				
					echo "<a href='#'>" . $row['nome'] . "</a>";
					echo "<br>";
					echo "<br>";
					echo '<img src="'.$row['imagem'].'" width="90%"/>';
					echo "<br>";
					echo "<p>" . $row['descricao'] . "</p>";
					echo "<br>";
					echo "<p> Preço: R$ " . $row['preco'] . "</p>";
					
				echo "</article>";
				}
			?>
		</section>
	</body>
</html>

<?php 

mysqli_free_result($dados);

?>
