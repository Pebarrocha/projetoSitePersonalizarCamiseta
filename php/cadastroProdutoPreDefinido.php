<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo_cadastro_cliente.css">
		<title>Cadastro de Camisetas Pré-Definidas</title>
	</head>

	<body>
		
		<h1> Cadastro de produtos pré-definidos </h1>

		<form>
			Nome: 
			<input type="text" name="nome"> <br>
			Descrição: <br>
			<textarea name="descricao" rows="10" cols="30">
				Digite a descrição de sua camiseta aqui!
			</textarea><br>
			Tamanho: <select>
				<option value="PP">PP</option>
				<option value="P">P</option>	
				<option value="M">M</option>		
				<option value="G">G</option>
				<option value="GG">GG</option>
			</select><br>
			Imagem: <input type="file" name="imagem"><br>
			
			Sexo: <select>
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
			</select><br>

			Modelo: <select>
				<option value="tshirt">T-shirt</option>
				<option value="polo">Polo Feminina</option>
				<option value="polo">Polo Masculina</option>
				<option value="babylook">Baby Look</option>
				<option value="cropped">Cropped</option>
			</select><br>


			<button type="<button">Cadastrar</button>

		</form>



	</body>


</html>