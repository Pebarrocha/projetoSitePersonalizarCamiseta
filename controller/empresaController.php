

<?php


require_once '../model/empresaMODEL.php';


function Processo($processo){

    switch ($processo){

        case 'incluir':

            if (isset($_POST['ok']) && !empty($_POST['ok'])){
                foreach($_POST as $nome_campo => $valor){
                    $comando = "\$" . $nome_campo . "='" . $valor . "';";

                    eval($comando);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }

                $pDAO = new EmpresaMODEL();
                $pDAO->incluirEmpresa($nome,$cnpj,$nomef,$tel,$rua,$cidade,$cep,$bairro);
                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="../VIEW/cadastroEmpresaVIEW.php";</script>';
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
                        $sql = "SELECT * FROM empresa WHERE $tipo LIKE '%' '$edconsulta' '%' ";
                        $cDAO = new EmpresaMODEL();
                        $rs = $cDAO->consultarEmpresa($sql);

                    }elseif (isset($tipo) == "todos"|| $edconsulta != null ){
                    $sql = "SELECT * FROM empresa";
                    $cDAO = new EmpresaMODEL();
                    $rs = $cDAO->consultarEmpresa($sql);

                }
            }

            if(isset($_GET['btnexcluir']) && !empty($_GET['btnexcluir'])){
//                echo '<script>alert("Entrou no botao excluir"); </script>';
                $id = $_GET['id'];
                $eDAO = new EmpresaMODEL();
                $eDAO->deletarEmpresa($id);
                echo '<script>window.location="consultaEmpresaVIEW.php";</script>';
            }
            break;

        case 'alterar':
            global $rs;
            $sql = 'SELECT nome,cnpj,nomefantasia,telefone,rua,cidade,CEP,bairro
FROM empresa WHERE codEmpresa="' . $_GET["id"] . '"';
            $aDAO = new EmpresaMODEL();
            $rs = $aDAO->consultarEmpresa($sql);
            if (isset($_POST['btnalterar']) && !empty($_POST['btnalterar'])){
                foreach($_POST as $nome_campo => $valor){
                    $comand = "\$" . $nome_campo . "='" . $valor . "';";
                    eval($comand);
                    $nome_campo = str_replace(",",".", $nome_campo);
                }
                $aDAO->alterarEmpresa($nome,$cnpj,$nomef, $tel, $rua, $cidade, $cep, $bairro);

                echo '<script>window.location="consultaEmpresaVIEW.php";</script>';
            }
            break;
    }
}
?>