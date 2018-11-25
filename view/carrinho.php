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

}


?>

<!DOCTYPE html>

<html>
    <head lang="pt-br">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/carrinho.css">
        <title>Cadastro de clientes</title>

        <style type="text/css">
        
        </style>

    </head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<input type="button" class="login" value="Carrinho de Compras">
<input type="button" class="login" value="Minha Conta">
<input type="button" class="login" value="Entrar" onclick="location. href='login.php'">
</form>
</ul>
</nav>
</header>



<body>
    <img class="teste" src="a.jpg">
    <nav class="navegacao">
    <form id="formmain">
<ul>

<li><a href="main.php">INICIO</a>
<li><a href="#">CAMISETAS MASCULINAS</a>
<li><a href="#">CAMISETAS FEMININAS</a>
<input type="hidden" id="btnconsultafeminina" name="btnconsultafeminina"></a>
<li><a href="#">CONTATO</a>
<li><a href="#">SOBRE</a>
</ul>
</form>
</nav>

<div id=corpo>
<table border="1px">
    <caption>CARRINHO DE COMPRAS</caption>
    <thead>
    <tr>
        <th width="244">PRODUTO</th>
        <th width="79">QUANTIDADE</th>
        <th width="89">Pre&ccedil;o</th>
        <th width="100">SUBTOTAL</th>
        <th width="64"></th>
    </tr>
    </thead>
    <form action="?acao=up" method="post">
        <tfoot>
        <tr>
            <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
        <tr>
            <td colspan="5"><a href="main.php">Continuar Comprando</a> </td>
        </tfoot>
        <tbody>
        <?php
        if(count($_SESSION['carrinho']) == 0){
            echo '
        <tr>
          <td colspan="5">Não há produto no carrinho</td>
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
                <td>'.$nome.'</td>
                <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                <td>R$ '.$preco.'</td>
                <td>R$ '.$sub.'</td>
                <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                            </tr>';
            }
            $total = number_format($total, 2, ',', '.');
            echo '<tr>                         
              <td colspan="4">Total</td>
              <td>R$ '.$total.'</td>
                    </tr>';
        }
        ?>
</div>
        </tbody>
    </form>
</table>
</body>
</html>