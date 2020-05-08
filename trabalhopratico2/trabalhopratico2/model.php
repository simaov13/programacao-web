<?php
    require("connection.php");

    function inserirPessoa($primeiroNome, $ultimoNome, $anoNascimento){
        global $mysqlConn;
        //Criar SQL
        $sql = "INSERT INTO pessoas (primeiroNome, ultimoNome, anoNascimento) VALUES ('".$primeiroNome."', '".$ultimoNome."', '".$anoNascimento."')";

        //Executar o SQL na base de dados
        if($mysqlConn->query($sql)){
        }else{
            echo "Erro ao inserir os dados: ".$mysqlConn->error;
            echo "<br>";
            echo $sql;
        }

        header("Location: view.php");
    }

    function alterarPessoa($primeiroNome, $ultimoNome, $anoNascimento, $id){
        global $mysqlConn;
        //Criar SQL
        $sql = "UPDATE pessoas SET primeiroNome = '".$primeiroNome."', ultimoNome = '".$ultimoNome."', anoNascimento = '".$anoNascimento."' WHERE id=".$id;

        //Executar o SQL na base de dados
        if($mysqlConn->query($sql)){
        }else{
            echo "Erro ao alterar os dados: ".$mysqlConn->error;
            echo "<br>";
            echo $sql;
        }

        header("Location: view.php");
    }

    function eliminarPessoa($id){
        global $mysqlConn;
        //Criar SQL
        $sql = "DELETE FROM pessoas WHERE id=".$id;

        //Executar o SQL na base de dados
        if($mysqlConn->query($sql)){
        }else{
            echo "Erro ao alterar os dados: ".$mysqlConn->error;
            echo "<br>";
            echo $sql;
        }

        header("Location: view.php");
    }

    function listarPessoas(){
        global $mysqlConn;
        global $listaPessoas;

        //SQL para listar pessoas
        $sql = "SELECT * FROM pessoas";

        //Executar o SQL
        $listaPessoas = $mysqlConn->query($sql);

        if($listaPessoas){
        }else{
            echo "Erro ao consultar os dados: ".$mysqlConn->error;
            echo "<br>";
            echo $sql;
        }
    }

    function pesquisarPessoa($textoPesquisa){
        global $mysqlConn;
        global $listaPessoas;

        //SQL para listar pessoas
        $sql = "SELECT * FROM pessoas WHERE primeiroNome LIKE '%".$textoPesquisa."%' OR ultimoNome LIKE '%".$textoPesquisa."%'";

        //Executar o SQL
        $listaPessoas = $mysqlConn->query($sql);

        if($listaPessoas){
        }else{
            echo "Erro ao pesquisar os dados: ".$mysqlConn->error;
            echo "<br>";
            echo $sql;
        }
    }

    function listarPessoa($id){
        global $mysqlConn;
        global $detalhePessoa;

        //SQL para listar pessoas
        $sql = "SELECT * FROM pessoas WHERE id=".$id;
        return $mysqlConn->query($sql);
    }
?>