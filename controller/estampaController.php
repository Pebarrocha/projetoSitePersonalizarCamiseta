

<?php


require_once '../model/estampaMODEL.php';
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

                $pDAO = new estampaMODEL();

                $pDAO->incluirEstampa($nome,$_POST['$imagem']);
                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="../VIEW/cadastroEstampaVIEW.php";</script>';
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


                if(isset($tipo) == "nome" || $edconsulta != null){
                    $sql = "SELECT * FROM estampacamiseta WHERE $tipo = '$edconsulta' ";
                    $cDAO = new EstampaMODEL();
                    $rs = $cDAO->consultarEstampa($sql);


                }else{
                    $sql = "SELECT * FROM estampacamiseta";
                    $cDAO = new EstampaMODEL();
                    $rs = $cDAO->consultarEstampa($sql);

                }
            }

            if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
//                echo '<script>alert("Entrou no botao excluir"); </script>';
                $id = $_GET['id'];
                $eDAO = new estampaMODEL();
                $eDAO->deletarEstampa($id);
                echo '<script>window.location="consultaEstampaVIEW.php";</script>';
            }
            break;

        case 'alterar':
            global $rs;
            $sql = 'SELECT nomeEstampa,imagemEstampa
FROM estampacamiseta WHERE codEstampaCamiseta="' . $_GET["id"] . '"';
            $aDAO = new estampaMODEL();
            $rs = $aDAO->consultarEstampa($sql);
            if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
                foreach($_POST as $nome_campo => $valor){
                    $comand = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comand);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }
                $aDAO->alterarEstampa($nome,$img);

                echo '<script>window.location="../view/consultaEstampaVIEW.php";</script>';
            }
            break;
    }
}
?>