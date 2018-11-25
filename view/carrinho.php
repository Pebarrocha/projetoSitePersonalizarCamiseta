<?php
session_start();
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
} //adiciona produto

if(isset($_GET['acao'])){
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){
        $id = intval($_GET['id']);
        if(!isset($_SESSION['carrinho'][$id])){
            $_SESSION['carrinho'][$id] = 1;
        } else {
            $_SESSION['carrinho'][$id] += 1;
        }
    } //REMOVER CARRINHO 

    if($_GET['acao'] == 'del'){
        $id = intval($_GET['id']);
        if(isset($_SESSION['carrinho'][$id])){
            unset($_SESSION['carrinho'][$id]);
        }
    } //ALTERAR QUANTIDADE 
    if($_GET['acao'] == 'up'){
        if(is_array($_POST['prod'])){
            foreach($_POST['prod'] as $id => $qtd){
                $id  = intval($id);
                $qtd = intval($qtd);
                if(!empty($qtd) || $qtd <> 0){
                    $_SESSION['carrinho'][$id] = $qtd;
                }else{
                    unset($_SESSION['carrinho'][$id]);
                }
            }
        }
    }
        $total = $_POST['total'];
        $_SESSION['total'] = $total;

        $qtd = $_POST['qtd'];
        $_SESSION['qtd'] = $qtd;

}


?>

<!DOCTYPE html>

<html>
    <head lang="pt-br">
        <meta charset="utf-8">
       
        <title>Cadastro de clientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/carrinho.css">
        
        </style>

    </head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<a href="loginPainel.php"><img src="ab.png"></a>
<input type="button" class="login" value="Carrinho de Compras" onclick="location. href='carrinho.php'">
<input type="button" class="login" value="Minha Conta">
<input type="button" class="login" value="Entrar" onclick="location. href='login.php'">
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

    <h2><center>CARRINHO DE COMPRAS </center> </h2><br>
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
    <form action="?acao=up" method="post">
        <tfoot>
        <tr>
            <td colspan="1" height="70" align="center"><a href="main.php"></a> </td>
            <td colspan="2" height="70" align="center"><a href="main.php"><button type="button" class="btn btn-warning">CONTINUAR COMPRANDO</button></a> </td>
            <td colspan="2" height="70" align="center"><a href="login.php"><button type="button" class="btn btn-warning">CONFIRMAR COMPRA</button></a> </td>
        </tfoot>
        <tbody>
        <?php
        if(count($_SESSION['carrinho']) == 0){
            echo '
        <tr>
          <td colspan="5" height="200" align="center">Não há produto no carrinho</td>
        </tr>
      ';
        } else {
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
                <td height="40" align="center"><input type="text" style="text-align: center;" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                <td height="40" align="center">R$ '.$preco.'</td>
                <td height="40" align="center">R$ '.$sub.'</td>
                <td height="40" align="center"><a href="?acao=del&id='.$id.'">REMOVER</a></td>
                            </tr>';
            }
            $total = number_format($total, 2, ',', '.');
            echo '<tr>                         
              <td colspan="4" align="right">TOTAL</td>
              <td align="center">R$ '.$total.'</td>
                    </tr>';
        }

    

       ?>
</div>
        </tbody>
    </form>
</table>


    <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>