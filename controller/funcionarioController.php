

<?php


require_once '../model/funcionarioMODEL.php';


function Processo($processo){

    switch ($processo){

        case 'incluir':

            if (isset($_POST['ok']) && !empty($_POST['ok'])){
                foreach($_POST as $nome_campo => $valor){
                    $comando = "\$" . $nome_campo . "='" . $valor . "';";

                    eval($comando);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }

                $pDAO = new FuncionarioMODEL();
                $pDAO->incluirFuncionario($nome,$cpf,$senha);
                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="../VIEW/cadastroFuncionarioVIEW.php";</script>';
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


                    if(isset($tipo) == "nome"|| $edconsulta != null ) {
                        $sql = "SELECT * FROM funcionario WHERE $tipo LIKE '%' '$edconsulta' '%' ";
                        $cDAO = new FuncionarioMODEL();
                        $rs = $cDAO->consultarFuncionario($sql);
                    } elseif(isset($tipo) == "cpf"|| $edconsulta != null ){
                            $sql = "SELECT * FROM funcionario WHERE $tipo LIKE '%' '$edconsulta' '%' ";
                            $cDAO = new FuncionarioMODEL();
                            $rs = $cDAO->consultarFuncionario($sql);
                    }elseif (isset($tipo) == "todos"|| $edconsulta != null ){
                    $sql = "SELECT * FROM funcionario";
                    $cDAO = new FuncionarioMODEL();
                    $rs = $cDAO->consultarFuncionario($sql);

                }
            }

            if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
//                echo '<script>alert("Entrou no botao excluir"); </script>';
                $id = $_GET['id'];
                $eDAO = new FuncionarioMODEL();
                $eDAO->deletarFuncionario($id);
                echo '<script>window.location="consultaFuncionarioVIEW.php";</script>';
            }
            break;

        case 'alterar':
            global $rs;
            $sql = 'SELECT nome,cpf,senha
FROM funcionario WHERE codFuncionario="' . $_GET["id"] . '"';
            $aDAO = new FuncionarioMODEL();
            $rs = $aDAO->consultarFuncionario($sql);
            if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
                foreach($_POST as $nome_campo => $valor){
                    $comand = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comand);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }
                $aDAO->alterarFuncionario($nome,$cpf,$senha);

                echo '<script>window.location="consultaFuncionarioVIEW.php";</script>';
            }
            break;
    }
}
?>