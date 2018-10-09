<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="projetocamiseta";
$port = "3306";


$conexao = mysqli_connect($servername, $username, $password, $dbname,$port);

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>