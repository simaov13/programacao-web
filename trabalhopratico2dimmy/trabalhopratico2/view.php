<?php
    require("controller.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Prático 2</title>
</head>
<body>
    <!-- FORMULÁRIO -->

    <?php
        if(isset($_GET['alterarID'])){
            $action = "view.php?alterarID=".$_GET['alterarID'];
        }else{
            $action = "view.php";
        }
    ?>

    <form method="POST" action="<?php echo $action ?>">
        <label for="primeiroNome">Primeiro Nome: </label>
        <input type="text" name="primeiroNome" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['primeiroNome']; } ?>">
        <br>
        <label for="ultimoNome">Último Nome: </label>
        <input type="text" name="ultimoNome" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['ultimoNome']; } ?>">
        <br>
        <label for="anoNascimento">Ano Nascimento: </label>
        <input type="number" name="anoNascimento" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['anoNascimento']; } ?>">
        <br>

        <?php if(isset($detalhePessoa)){ ?>
            <button>Atualizar</button>
        <?php }else{ ?>
            <button>Inserir</button>
        <?php } ?>
    </form>

    <!-- PESQUISA -->

    <form method="GET" action="view.php">
        <label for="textoPesquisa">Nome: </label>
        <input type="text" name="textoPesquisa" required value="<?php if(isset($_GET['textoPesquisa'])){ echo $_GET['textoPesquisa']; } ?>">
        <button>Pesquisar</button>
        <?php if(isset($_GET['textoPesquisa'])) { ?>
            <a href="view.php">Limpar</a>
        <?php } ?>
    </form>

    <!-- RESULTADOS -->

    <table border="1">
        <?php include("peopleList.php"); ?>
    </table>
</body>
</html>