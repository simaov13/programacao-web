<?php
    require("controller.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Prático 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark">
    <!-- FORMULÁRIO -->
    <?php
        if(isset($_GET['alterarID'])){
            $action = "view.php?alterarID=".$_GET['alterarID'];
        }else{
            $action = "view.php";
        }
    ?>
    <div class="container mt-3">
        <form method="POST" action="<?php echo $action ?>">
            <div class="form-group">
                <input type="primeiroNome" class="form-control" name="primeiroNome" id="primeiroNome" placeholder="Primeiro Nome" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['primeiroNome']; } ?>">
            </div>
            <div class="form-group">
                <input type="ultimoNome" class="form-control" name="ultimoNome" id="ultimoNome" placeholder="Último Nome" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['ultimoNome']; } ?>">
            </div>
            <div class="form-group">
                <input type="anoNascimento" class="form-control" name="anoNascimento" id="anoNascimento" placeholder="Ano Nascimento" required value="<?php if(isset($detalhePessoa)){ echo $detalhePessoa['anoNascimento']; } ?>">
            </div>
                <?php if(isset($detalhePessoa)){ ?>
                    <button class="btn btn-primary"> <i class="fa fa-refresh pr-2" aria-hidden="true"></i>Atualizar</button>
                <?php }else{ ?>
                    <button class="btn btn-primary"> <i class="fa fa-plus pr-2" aria-hidden="true"></i>Inserir</button>
                <?php } ?>
        </form>

        <!-- PESQUISA -->

        <form method="GET" action="view.php">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="textoPesquisa" id="textoPesquisa" placeholder="Pesquisar por..." required value="<?php if(isset($_GET['textoPesquisa'])){ echo $_GET['textoPesquisa']; } ?>">
                <div class="btn-group mt-3">
                <button class="btn btn-primary"> <i class="fa fa-search pr-2" aria-hidden="true"></i>Pesquisar</button>
                </div>
                <?php if(isset($_GET['textoPesquisa'])) { ?>
                    <a href="view.php" class=" btn btn-primary mt-3"> <i class="fa fa-eraser pr-2" aria-hidden="true"></i>Limpar</a>
                <?php } ?>
            </div>
        </form>

        <!-- RESULTADOS -->
        <table class="table table-dark">
            <?php include("peopleList.php"); ?>
        </table>
    </div>
</body>
</html>