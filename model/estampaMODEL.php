
<?php

Class estampaMODEL{

    public function incluirEstampa($nome, $img){

        header('Content-Type: text/html; charset=utf-8');
        $nometemp = $_FILES['img']["tmp_name"];
        $nomereal=$_FILES["img"]["name"];
        copy($nometemp,$nomereal);
        $data   = fopen($nomereal, 'r');
        $size   = filesize($nomereal);
        $contents= fread($data, $size);
        fclose($data);
        $imagestring =  base64_encode($contents);

//        $imagedecode = base64_decode($imagestring);

//        echo $imagestring;
        unlink($nomereal);

        try{
            require_once 'conexaomysql.php';
            $sql = "insert into estampacamiseta (nomeEstampa,imagemEstampa) values ('$nome','$imagestring')";
            echo ("incuir");
            $result = mysqli_query($conexao, $sql);
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }


    public function consultarEstampa($sql){
        require_once 'conexaomysql.php';
        $result = mysqli_query($conexao,$sql);
        return $result;
    }

    public function alterarEstampa($nome, $img){
        header('Content-Type: text/html; charset=utf-8');
        $nometemp = $_FILES['img']["tmp_name"];
        $nomereal=$_FILES["img"]["name"];
        copy($nometemp,$nomereal);
        $data   = fopen($nomereal, 'r');
        $size   = filesize($nomereal);
        $contents= fread($data, $size);
        fclose($data);
        $imagestring =  base64_encode($contents);

//        $imagedecode = base64_decode($imagestring);

        echo "<secrpit> alert($imagestring);</script>";

        try{
            require 'conexaomysql.php';
            $sql = 'update estampacamiseta set nomeEstampa="' .$nome.  ' " WHERE codEstampaCamiseta="' . $_GET["id"] . '"';

            $result = mysqli_query($conexao,$sql);
            unlink($nomereal);
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