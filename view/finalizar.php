<?php

//Chamando o controller para o envio dos dados
require_once ('../controller/vendaController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('incluir');
?>

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

   <h2><CENTER>FINALIZAR COMPRA</CENTER></h2><br>
   <h5>DADOS DO CLIENTE:</h5><hr border="1px" color="white">
   
   <?php

    session_start();

    require("../model/conexaomysql.php");
           
          $id = $_SESSION['id'];
          
          $sql = "SELECT * FROM cliente WHERE email= '$id'";
          $qr = mysqli_query($conexao, $sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)) {

                $codCliente  = $ln['codCliente'];
                $nome  = $ln['nome'];
                $cpf  = $ln['cpf'];
                $rg  = $ln['rg'];
                $celular  = $ln['celular'];
                $fixo  = $ln['fixo'];
                $rua  = $ln['rua'];
                $numero  = $ln['numero'];
                $bairro  = $ln['bairro'];
                $cidade  = $ln['cidade'];
                $cep  = $ln['cep'];
                $descricao  = $ln['descricao'];
                $email  = $ln['email'];
           
                
                
        echo '
        <table border="1px" align="center"><tr>       
        <th height="30">C&oacute;digo do cliente: </th><td width="300" align="center">'.$codCliente. '</td></tr>

        <tr>       
        <th height="30" width="300">Nome do cliente: </th><td width="150" align="center">'.$nome.'</td></tr>

        <tr>       
        <th height="30" width="100" >CPF: </th><td width="200" align="center">'.$cpf.'</td>

        <tr>       
        <th height="30" width="100">RG: </th><td width="300" align="center">'.$rg.'</td>
       
        <tr>      
        <th height="30" width="100">Celular: </th><td width="300" align="center">'.$celular.'</td>
        
        <tr>       
        <th height="30" width="100">Telefone Fixo: </th><td width="100" align="center">'.$fixo.'</td>

        <tr>       
        <th width="100" height="40" >Rua: </th><td width="100" align="center">'.$rua.'</td></tr>
        
        <tr>        
        <th width="100" height="40" >Numero: </th><td width="100" align="center">'.$numero.'</td></tr>
     
        <tr>         
        <th width="100" height="40">Bairro: </th><td width="100" align="center">'.$bairro.'</td></tr>

        <tr>         
        <th width="100" height="40">Cidade: </th><td width="100" align="center">'.$cidade.'</td></tr>

        <tr>         
        <th width="100" height="40">CEP: </th><td width="100" align="center">'.$cep.'</td></tr>

        <tr>         
        <th width="100" height="40">Descricao de endereco: </th><td width="100" align="center">'.$descricao.'</td></tr>

        <tr>         
        <th width="100" height="40">Email: </th><td width="100" align="center">'.$email.'</td></tr>
        ';
}
echo '</table>'
?>

   <br><br><h5>DADOS DA VENDA:</h5><hr border="1px" color="white">
   <table border="1px" align="center">
    <thead>
    <tr align="center">
        <th width="250" height="40" align="center">PRODUTO</th>
        <th width="150" height="40" align="center">QUANTIDADE</th>
        <th width="89" height="40" align="center">PRE&Ccedil;O</th>
        <th width="100" height="40" align="center">SUBTOTAL</th>
        <th width="100" height="40" align="center"></th>
    </tr>
    </thead>
   <?php
            require("../model/conexaomysql.php");
            $total = 0;
            foreach($_SESSION['carrinho'] as $id => $qtd){
                $sql   = "SELECT *  FROM camisetapredefinida WHERE codCamisetaPreDefinida= '$id'";
                $qr    = mysqli_query($conexao, $sql) or die(mysqli_error());
                $ln    = mysqli_fetch_assoc($qr);
                $nome  = $ln['nome'];
                $preco = number_format($ln['preco'], 2, ',', '.');
                $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                $total += $ln['preco'] * $qtd;
                echo '
              <tr>       
                <td align="center">'.$nome.'</td>
                <td height="40" align="center">' .$qtd.'</td>
                <td height="40" align="center">R$ '.$preco.'</td>
                <td height="40" align="center">R$ '.$sub.'</td>
              
                            </tr>';
            }
            $total = number_format($total, 2, ',', '.');
            echo '<tr>                         
              <td colspan="4" align="right">TOTAL</td>
              <td align="center">R$ '.$total.'</td>
                    </tr></table>';

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $time = date('H:i');

?>

        <form action="#" name="form" id="form" method="post"> 
        <input type="hidden" name="horaVenda" id="horaVenda" value="<?php echo $time; ?>">
        <input type="hidden" name="dataVenda" id="dataVenda" value="<?php echo $date; ?>">
        <input type="hidden" name="precoTotal" id="precoTotal" value="<?php echo $total; ?>">
        <br><label>Forma de pagamento:</label><br>
        <select name="pagamento" style="width:200px";>
              <option value="cartao">Cartão</option> 
              <option value="dinheiro">Dinheiro</option>
        </select><br>
        <input type="hidden" name="cliente" id="cliente" value="<?php echo $codCliente; ?>">

        <br><right><a href="main.php"><button type="button" class="btn btn-warning">VOLTAR</button></a>
        <input type="button2" name="button" id="button" value="CADASTRAR" onclick="submitForm()">
        <input type="hidden" name="ok" id="ok">
    </form></div>
    <script type="text/javascript">

                
                function submitForm(){  
                    //validaCadastro(); 
                    alert("Teste view");        
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