<?php require_once ('../model/mainMODEL.php')?>
<?php

function Processo($processo){

switch ($processo) {

case 'consultar':
global $rs;

$cDAO = new consultarMain();
$rs = $cDAO->consultarBotao($_POST['sexo']);

break;


}



}// fim da função processo




?>
