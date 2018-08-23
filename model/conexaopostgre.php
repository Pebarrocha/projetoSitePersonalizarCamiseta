
<?php
if(!@($conexao=pg_connect ("host=localhost dbname=bdcamiseta port=5432 user=postgres password="))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   //pg_close ($conexao);
   print "Conexão OK!"; 
}
?>
