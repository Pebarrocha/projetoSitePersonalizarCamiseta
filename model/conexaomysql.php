<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="bdcamiseta";
$port = "3306"

// Create connection
// // mysqli_connect(host,username,password,dbname,port,socket);
$conexao = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 
echo "Connected successfully";
?>