<?php


require_once '../model/fotoCamisetaMODEL.php';
//require_once '../DAO/cadastroDeProdutoPreDefinidoDAO.php';

function Processo($processo){

    switch ($processo){

        case 'incluir':
//if(isset($_POST['delete_id']) && !empty($_POST['delete_id']))

            //alert ("incluir estampa controler");
            if (isset($_POST['ok']) && !empty($_POST['ok'])){
                foreach($_POST as $nome_campo => $valor){
                    $comando = "\$" . $nome_campo . "='" . $valor . "';";
//echo $comando;
                    eval($comando);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }

                $pDAO = new fotoCamisetaMODEL();

                $pDAO->incluirImagem($nome,$_POST['$imagem']);
                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="../VIEW/CadastroFotoCamisetaPersonalizada.php";</script>';
            }
            break;

        case 'consultar':
            global $rs;

            if (isset($_POST['btnconsulta']) && !empty($_POST['btnconsulta'])){
                foreach($_POST as $nome_campo => $valor){
                    $comando = "\$" . $nome_campo . "='" . $valor . "';";
                    //echo $comando;
                    eval($comando);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }


                if(isset($tipo) != null || $edconsulta != null){
                    $sql = "SELECT * FROM fotocamiseta WHERE $tipo LIKE '%' '$edconsulta' '%' ";
                    $cDAO = new fotoCamisetaMODEL();
                    $rs = $cDAO->consultarImagem($sql);


                }else{
                    $sql = "SELECT * FROM fotocamiseta";
                    $cDAO = new fotoCamisetaMODEL();
                    $rs = $cDAO->consultarImagem($sql);

                }
            }

            if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
//                echo '<script>alert("Entrou no botao excluir"); </script>';
                $id = $_GET['id'];
                $eDAO = new fotoCamisetaMODEL();
                $eDAO->deletarImagem($id);
                echo '<script>window.location="ConsultaFotoCamisetaVIEW.php";</script>';
            }
            break;

        case 'alterar':
            global $rs;
            $sql = 'SELECT nomeCamiseta,fotoCamiseta
FROM fotocamiseta WHERE codFotoCamiseta="' . $_GET["id"] . '"';
            $aDAO = new fotoCamisetaMODEL();
            $rs = $aDAO->consultarImagem($sql);
            if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
                foreach($_POST as $nome_campo => $valor){
                    $comand = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comand);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }
                $aDAO->alterarImagem($nome,$img);

                echo '<script>window.location="../view/ConsultaFotoCamisetaVIEW.php";</script>';
            }
            break;
    }
}
?>