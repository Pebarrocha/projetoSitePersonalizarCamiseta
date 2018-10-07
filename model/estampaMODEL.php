
<?php

Class estampaMODEL{

    public function incluirEstampa($nome, $img){

        try{
            $base64 = base64_encode($img);
            require_once 'conexaomysql.php';
            $sql = "insert into estampacamiseta (nomeEstampa,imagemEstampa) values ('$nome','$img')";
            echo ("incuir");
            $result = mysqli_query($conexao, $sql);
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }


    public function consultarEstampa($sql){
        require_once 'conexaomysql.php';
//        echo '<script> alert("ENTROU NO CONSULTAR! MODEL") </script>';
        $result = mysqli_query($conexao,$sql);
        return $result;
    }

    public function alterarEstampao($nome, $img){
        try{
            $base64 = base64_encode($img);
            require 'conexaomysql.php';
            $sql = 'update estampacamiseta set nomeEstampa="' .$nome.  ' ", imagemEstampa="'. $base64 . '"';

            $result = mysqli_query($conexao,$sql);

        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }

    public function deletarEstampa($id){
        try{
            require_once 'conexaomysql.php';
            $sql = "delete from estampacamiseta WHERE codEstampaCamiseta = $id";
            $result = mysqli_query($conexao,$sql);
            echo '<script> alert("Conteudo Excluido com sucesso") </script>';
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
        }
    }
}
?>