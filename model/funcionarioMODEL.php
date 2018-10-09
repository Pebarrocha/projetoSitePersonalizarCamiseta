
<?php

Class FuncionarioMODEL{

    public function incluirFuncionario($nome,$cpf,$senha){

        try{
            require_once 'conexaomysql.php';
            $sql = "insert into funcionario (nome,cpf,senha) values ('$nome','$cpf','$senha')";

            $result = mysqli_query($conexao, $sql);
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }


    public function consultarFuncionario($sql){
        require_once 'conexaomysql.php';
        $result = mysqli_query($conexao,$sql);
        return $result;
    }

    public function alterarFuncionario($nome, $cpf, $senha){
        try{
            require 'conexaomysql.php';
            $sql = 'update funcionario set nome="' .$nome.  ' ", cpf="'. $cpf . '", senha = " '. $senha .' " WHERE codFuncionario="' . $_GET["id"] . '"';
            $result = mysqli_query($conexao,$sql);

        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }

    public function deletarFuncionario($id){
        try{
            require_once 'conexaomysql.php';
            $sql = "delete from funcionario WHERE codFuncionario = $id";
            $result = mysqli_query($conexao,$sql);
            echo '<script> alert("Conteudo Excluido com sucesso") </script>';
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
        }
    }
}
?>