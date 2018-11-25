
<!DOCTYPE html>

<html>
    <head lang="pt-br">
        <meta charset="utf-8">
       
        <title>Cadastro de clientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/finalizar.css">
        
        </style>

    </head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<a href="loginPainel.php"><img src="ab.png"></a>
<input type="button" class="login" value="Carrinho de Compras" onclick="location. href='carrinho.php'">
<input type="button" class="login" value="Minha Conta" onclick="location. href='loginConta.php'">
</form>
</ul>
</nav>
</header>



<body>
    <img class="teste" src="banner.jpg">
    <nav class="navegacao">
    <form id="formmain">
<ul>

<li><a href="main.php">INICIO</a>
<li><a href="masculino.php">CAMISETAS MASCULINAS</a>
<li><a href="feminino.php">CAMISETAS FEMININAS</a>
<li><a href="#">CONTATO</a>
<li><a href="#">SOBRE</a>
</ul>
</form>
</nav>

<div id=corpo>

   <h2><CENTER>MINHA CONTA</CENTER></h2>
   <h3><center>Hist&oacute;rico de compras</center></h3>

<table border="1px" align="center">
    <thead>
    <tr align="center">
        <th width="200" height="40" align="center">C&Oacute;DIGO DE VENDA</th>
        <th width="150" height="40" align="center">HORA DE VENDA</th>
        <th width="150" height="40" align="center">DATA DE VENDA</th>
        <th width="100" height="40" align="center">PRE&Ccedil;O TOTAL</th>
        <th width="200" height="40" align="center">TIPO DE PAGAMENTO</th>
    </tr>
    </thead>

<?php

    session_start();

    require("../model/conexaomysql.php");
           
          $email = $_SESSION['email'];
    
        $sql = "SELECT *  FROM cliente, venda WHERE email= '$email' AND cliente.codCliente=venda.Cliente_codCliente1";
        $qr = mysqli_query($conexao, $sql) or die(mysqli_error());

        while($ln = mysqli_fetch_assoc($qr)) {

                $codVenda  = $ln['codVenda'];
                $horaVenda  = $ln['horaVenda'];
                $dataVenda  = $ln['dataVenda'];
                $preco = number_format($ln['precoTotal'], 2, ',', '.');
                $tipoDePagamento  = $ln['tipoDePagamento'];
              echo '
              <tr>       
                <td align="center">'.$codVenda.'</td>
                <td align="center">'.$horaVenda.'</td>
                <td align="center">'.$dataVenda.'</td>
                <td align="center">R$ '.$preco.'</td>
                <td align="center">'.$tipoDePagamento.'</td>
                            </tr>';
}
echo '</table>'
?>

    <br><td colspan="2" height="70" align="center"><a href="main.php"><button type="button" class="btn btn-warning">SAIR</button></a> </td>

    <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>