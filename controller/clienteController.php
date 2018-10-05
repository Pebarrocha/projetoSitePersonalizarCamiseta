<?php


require_once '../model/clienteMODEL.php';

function Processo($processo){

    switch ($processo){

        case 'incluir':

            if (isset($_POST['ok']) && !empty($_POST['ok'])){
                foreach($_POST as $nome_campo => $valor){
                    $comando = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comando);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }

                $pDAO = new ClienteMODEL();
                $pDAO->incluirCliente($nome,$cpf,$rg,$celular,$fixo,$rua,$numero,$bairro,$cidade,$cep,$descricao,$email,$senha);
                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="../VIEW/cadastroClienteVIEW.php";</script>';
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
                    $sql = "SELECT * FROM cliente WHERE $tipo = '$edconsulta' ";
                    $cDAO = new ClienteMODEL();
                    $rs = $cDAO->consultarCliente($sql);


                }else{
                    $sql = "SELECT * FROM cliente";
                    $cDAO = new ClienteMODEL();
                    $rs = $cDAO->consultarCliente($sql);

                }
            }

            if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){

                $id = $_GET['id'];
                $eDAO = new ClienteMODEL();
                $eDAO->deletarCliente($id);
                echo '<script>window.location="consultaClienteVIEW.php";</script>';
            }
            break;



        case 'alterar':
            global $rs;
            echo 'OK';
                     $sql = 'SELECT nome,cpf,rg,celular,fixo,rua,numero,bairro,cidade,cep,descricao,email,senha
                        FROM cliente WHERE codCliente="' . $_GET["id"] . '"';
            $aDAO = new ClienteMODEL();
            $rs = $aDAO->consultarCliente($sql);
            
            if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
                foreach($_POST as $nome_campo => $valor){
                    $comand = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comand);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }
                $aDAO->alterarCliente($nome,$cpf,$rg,$celular,$fixo,$rua,$numero,$bairro,$cidade,$cep,$descricao,$email,$senha);
                echo '<script>window.location="consultaClienteVIEW.php";</script>';
            }
            break;
    }
}
?>