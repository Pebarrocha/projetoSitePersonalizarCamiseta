
<?php

Class EmpresaMODEL{

    public function incluirEmpresa($nome,$cnpj,$nomef,$tel,$rua,$cidade,$cep,$bairro){

        try{
            require_once 'conexaomysql.php';
            $sql = "insert into empresa (nome,cnpj,nomeFantasia,telefone,rua,cidade,CEP,bairro) values ('$nome','$cnpj','$nomef','$tel','$rua','$cidade','$cep','$bairro')";

            $result = mysqli_query($conexao, $sql);
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }


    public function consultarEmpresa($sql){
        require_once 'conexaomysql.php';
        $result = mysqli_query($conexao,$sql);
        return $result;
    }

    public function alterarEmpresa($nome,$cnpj,$nomef,$tel,$rua,$cidade,$cep,$bairro){
        try{
            require 'conexaomysql.php';
            $sql = 'update empresa set nome="' .$nome.  ' ", cnpj="'. $cnpj . '", nomeFantasia = " '. $nomef .' ", telefone = " '. $tel .' ", rua = " '. $rua .' ", cidade = " '. $cidade .' ", CEP = " '. $cep .' ", bairro = " '. $bairro .' " WHERE codEmpresa="' . $_GET["id"] . '"';
            $result = mysqli_query($conexao,$sql);

        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }

    public function deletarEmpresa($id){
        try{
            require_once 'conexaomysql.php';
            $sql = "delete from empresa WHERE codEmpresa = $id";
            $result = mysqli_query($conexao,$sql);
            echo '<script> alert("Conteudo Excluido com sucesso") </script>';
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
        }
    }
}
?>