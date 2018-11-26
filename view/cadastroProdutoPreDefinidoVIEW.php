<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

Descrição: Formulário para cadastro dos produtos pré definidos que estarão
a disposição para venda no site. Essa formulário está na pasta VIEW. Ele controla apenas o visual e as entradas
digitadas pelo usuário na hora do cadastro.
-->

<?php
//Chamando o controller para o envio dos dados
require_once ('../controller/produtoPreDefinidoController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/predefinido.css">
<title>Cadastro de Camisetas Pré-Definidas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">


</head>

<body>
	<div class="row">
        <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CADASTRAR
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastroEmpresaVIEW.php">CADASTRAR EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroEstampaVIEW.php">CADASTRAR ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroFuncionarioVIEW.php">CADASTRAR FUNCIONÁRIO</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroFotoCamisetaPersonalizadaVIEW.php">CADASTRAR FOTO CAMISETA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroProdutoPreDefinidoVIEW.php">CADASTRAR PRODUTO PRÉ-DEFINIDO</a>
                             
                            </div>
                          </li>
                                       <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RELATÓRIO
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastroDeEmpresa.php">RELATÓRIO DE PERFIL DE CLIENTE</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroDeEstampa.php">RELATÓRIO DE VENDAS</a>
                  </div>
                </li>

<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CONSULTAR
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="consultaEmpresaVIEW.php">CONSULTA EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaEstampaVIEW.php">CONSULTA ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaFuncionarioVIEW.php">CONSULTA FUNCIONÁRIO</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaFotoCamisetaVIEW.php">CONSULTA FOTO CAMISETA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaProdutoPreDefinidoVIEW.php">CONSULTA PRÉ-DEFINIDO</a>
                   
                  </div>
                </li>

                            <li class="nav-item">
                              <a class="nav-link" href="#">SAIR</a>
                            </li>
                        </ul> </div></nav></div></div>


<!--
Criação dos formularios para recebimento das informações digitadas pelo usuário
O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
-->
<div id="new">
<h1> Cadastro de produtos pré-definidos </h1>
<form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
<label>Nome:</label>
<input type="text" name="nome" id="nome" placeholder="Nome da camiseta aqui!"> <br>
<label>Descrição:</label> <br>
<textarea name="descricao" id="descricao" rows="10" cols="30" placeholder="Digite a descrição da camiseta aqui!"></textarea><br>
<label>Tamanho:</label> <select name="tamanho" id="tamanho">
<option value="esq">Escolha um valor</option>
<option value="PP">PP</option>
<option value="P">P</option>
<option value="M">M</option>
<option value="G">G</option>
<option value="GG">GG</option>
    </select><br><br>
<label>Imagem: <input type="file" name="imagem" value="image"><br>

<br><br>
<label>Sexo:</label> <select name="sexo" id="sexo">
<option value="masculino">Masculino</option>
<option value="feminino">Feminino</option>
</select><br><br>

<label>Modelo:</label> <select name="modelo" id="modelo">
<option value="tshirt">T-shirt</option>
<option value="polo">Polo Feminina</option>
<option value="polo">Polo Masculina</option>
<option value="babylook">Baby Look</option>
<option value="cropped">Cropped</option>
</select><br><br>
<label>Preço:</label>
<input type="text" name="preco" id="preco" placeholder="Digite o preço da camiseta">

<!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
java script, que disparará os inputs dos forms para a página controller
O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
<input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
<input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validacao.js"> </script>
<!--Script (javascript) para submeter as informações resgatadas nos inputs
Ele pega os ids 'ok' e 'form' e trabalha com eles. O elemento ok é passado a ser true, enquanto
o elemento de id 'form' é submetido-->
<script type="text/javascript">
function submitForm(){
validaCadastro();
document.getElementById("ok").value = "true";
document.getElementById("form").submit();
//document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
}
</script>
<script src="../jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


</body>
</html>
