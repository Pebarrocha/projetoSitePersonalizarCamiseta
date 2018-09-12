
<?php

require_once ('../model/mainMODEL.php');

function Processo($processo){

switch ($processo) {

case 'consultar':

global $rs;


if (isset($_GET['btnconsultamasculina']) && !empty($_GET['btnconsultamasculina'])){
echo "<script>alert('Entrou controller masculino');</script>";
$tipo = 'masculino';
$cDAO = new consultarMain();
$rs = $cDAO->consultarBotao($tipo);
//echo '<script>window.location="../VIEW/main.php";</script>';
}
if (isset($_GET['btnconsultafeminina']) && !empty($_GET['btnconsultafeminina'])){
echo "<script>alert('Entrou controller feminino');</script>";
$tipo = 'feminino';
$cDAO = new consultarMain();
$rs = $cDAO->consultarBotao($tipo);
//echo '<script>window.location="../VIEW/main.php";</script>';
}




break;


}



}// fim da função processo




?>
