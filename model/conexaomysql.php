<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="bdcamiseta";

// Create connection
$conexao = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 
echo "Connected successfully";
?>