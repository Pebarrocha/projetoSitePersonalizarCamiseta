<?php

Class VendaMODEL{

    public function incluirVenda($horaVenda,$dataVenda,$precoTotal,$pagamento,$cliente){

        try{
            require_once 'conexaomysql.php';
            $sql = "insert into venda (horaVenda,dataVenda,precoTotal,tipoDePagamento,Cliente_codCliente1) values ('$horaVenda','$dataVenda','$precoTotal','$pagamento','$cliente')";

            $result = mysqli_query($conexao, $sql);

        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }


    public function consultarCliente($sql){
        require_once 'conexaomysql.php';
        $result = mysqli_query($conexao,$sql);
        return $result;
    }



    public function alterarCliente($nome,$cpf,$rg,$celular,$fixo,$rua,$num,$bairro,$cidade,$cep,$descricao,$email,$senha){
        try{
            require 'conexaomysql.php';
            $sql = 'update cliente set nome="' .$nome.  ' ", cpf="'. $cpf . '", rg = " '. $rg .' ", celular="'. $celular . '", fixo="'. $fixo . '", rua="'. $rua . '", numero="'. $num . '", bairro="'. $bairro . '", cidade="'. $cidade . '", cep="'. $cep . '", descricao="'. $descricao . '", email="'. $email . '", senha="'. $senha . '" WHERE codCliente="' . $_GET["id"] . '"';

            $result = mysqli_query($conexao,$sql);
            echo $result;

        }catch(Exception $e){
            echo 'Excecão capturada. MODEL: ', $e->getMessage(), "\n";
        }
    }

    public function deletarCliente($id){
        try{
            require_once 'conexaomysql.php';
            $sql = "delete from cliente WHERE codCliente = $id";
            $result = mysqli_query($conexao,$sql);
            echo '<script> alert("Conteudo Excluido com sucesso") </script>';
        }catch(Exception $e){
            echo 'Excecão capturada. MODEL Excluir: ', $e->getMessage(), "\n";
        }
    }
}
?>