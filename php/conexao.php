<?php
if(!@($conexao=pg_connect ("host=localhost dbname= port= user= password="))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   pg_close ($conexao);
   print "Conexão OK!"; 
}
?>
