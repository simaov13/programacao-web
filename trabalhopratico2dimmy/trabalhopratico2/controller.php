<?php
    require("model.php");

    //Verificar campos
    if(isset($_REQUEST["primeiroNome"]) &&
        $_REQUEST["primeiroNome"] != "" &&
        isset($_REQUEST["ultimoNome"]) &&
        $_REQUEST["ultimoNome"] != "" &&
        isset($_REQUEST["anoNascimento"]) &&
        $_REQUEST["anoNascimento"] != "")
    {
        //Recolher os dados enviados pelo formulário
        $primeiroNome = mysqli_real_escape_string($mysqlConn, $_REQUEST["primeiroNome"]);
        $ultimoNome = mysqli_real_escape_string($mysqlConn, $_REQUEST["ultimoNome"]);
        $anoNascimento = mysqli_real_escape_string($mysqlConn, $_REQUEST["anoNascimento"]);

        if(isset($_GET["alterarID"]) && $_GET["alterarID"] != ""){
            //Alterar pessoa
            $id = $_GET["alterarID"];
            alterarPessoa($primeiroNome, $ultimoNome, $anoNascimento, $id);
        }else{
            //Inserir pessoa
            inserirPessoa($primeiroNome, $ultimoNome, $anoNascimento);
        }
    }

    //Eliminar pessoas
    if(isset($_GET["eliminarID"]) && $_GET["eliminarID"] != ""){
        eliminarPessoa($_GET["eliminarID"]);
    }

    //Alterar pessoas
    if(isset($_GET["alterarID"]) && $_GET["alterarID"] != ""){
        $id = $_GET["alterarID"];
        $detalhePessoa = listarPessoa($id)->fetch_assoc();
    }

    //Pesquisar pessoas
    if(isset($_GET["textoPesquisa"]) && $_GET["textoPesquisa"] != ""){
        $textoPesquisa = mysqli_real_escape_string($mysqlConn, $_GET["textoPesquisa"]);
        pesquisarPessoa($textoPesquisa);
    }else{
        listarPessoas();
    }

    //Fechar ligação
    $mysqlConn->close();
?>