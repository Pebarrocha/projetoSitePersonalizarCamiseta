<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<body>
<?php
require'../model/conexaomysql.php';

$sql = "SELECT * FROM camisetapredefinida";
$qr = mysqli_query($conexao, $sql) or die(mysqli_error());
while($ln = mysqli_fetch_assoc($qr)) {
    echo '
<h2>' . $ln['nome'] . '</h2>
';
    echo 'Preço : R$ ' . number_format($ln['preco'], 2, ',', '.') . '<br>
';
    echo 'Tamanho: ' . $ln['tamanho'].'<br>
';
    echo 'Descrcrição: ' . $ln['descricao'].'<br>
';
    echo 'Sexo: ' . $ln['sexo'].'<br>
';
    echo 'modelo: ' . $ln['modelo'].'<br>
';
    echo '<img src="image/' . $ln['imagem'] . '" /<br> 
';
    /*echo '<a href="carrinho.php?acao=add&id=' . $ln['id'] . '">Comprar</a>';*/
    echo '
<hr />
';
}

?>
</body>