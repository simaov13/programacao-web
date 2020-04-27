<?php

    class User{
        public $userID;
        public $primeiroNome;
        public $ultimoNome;
        public $email;

        function __construct($userID, $primeiroNome, $ultimoNome, $email){
            $this->userID = $userID;
            $this->primeiroNome = $primeiroNome;
            $this->ultimoNome = $ultimoNome;
            $this->email = $email;
        }
    }

    $users = array();
    $pesquisaNome = "";

    function SearchUsers($mysqli, $pesquisaNome){
        if ($pesquisaNome != "") {
            $pesquisaNome = $mysqli->real_escape_string($pesquisaNome);
            $sql = "SELECT * FROM user WHERE primeiroNome LIKE '%".$pesquisaNome."%' OR ultimoNome LIKE '%".$pesquisaNome."%'";
        }else {
            $sql = "SELECT * FROM user";
        }

        global $users;
    
        $result = $mysqli->query($sql);
    
        if ($result->num_rows > 0) {
    
            while ($row = $result->fetch_assoc()) {
                $user = new User($row["userID"], $row["primeiroNome"], $row["ultimoNome"], $row["email"]);
                array_push($users, $user);
            }
        }
    }

    if(isset($_GET["nome"]) && $_GET["nome"] != ""){
        $pesquisaNome = $_GET["nome"];
    }

    $mysqli = new mysqli("localhost", "root", "", "pw2");
    $mysqli->set_charset('utf8');

    if ($mysqli->connect_error != "") {
        die("Could not connect! ".$mysqli->connect_error);
    }

    echo "Connection to DB established!";

    if (isset($_POST["primeiroNome"]) && $_POST["primeiroNome"] != "" && isset($_POST["ultimoNome"]) && $_POST["ultimoNome"] != "" && isset($_POST["email"]) && $_POST["email"] != "") {

        $primeiroNome = $mysqli->real_escape_string($_POST["primeiroNome"]);
        $ultimoNome = $mysqli->real_escape_string($_POST["ultimoNome"]);
        $email = $mysqli->real_escape_string($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<br>ERRO: Email inválido";
        }else {
            $sql = "INSERT INTO user (primeiroNome, ultimoNome, email) VALUES ('$primeiroNome', '$ultimoNome', '$email')";
            if ($mysqli->query($sql)) {
                echo "<br>Utilizador inserido com sucesso!";
            }else {
                echo "ERRO: Não foi inserido na base de dados!";
            }
        }
    }

    if (isset($_GET["eliminar"]) && $_GET["eliminar"] != "") {
        $userID = $mysqli->real_escape_string($_POST["eliminar"]);
        $sql = "DELETE FROM user WHERE userID =". $userID;
        if ($mysqli->query($sql)) {
            echo "<br>Utilizador eliminado com sucesso!";
        }else {
            echo "ERRO: Não foi eliminado na base de dados!";
        }
    }

    SearchUsers($mysqli, $pesquisaNome);

    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Utilizadores - CRUD</title>
</head>
<body>
    <h2>Utilizadores registados: </h2>
    <p>Consulte em baixo a lista de utilizadores registados no nosso site.</p>

    <h2>Inserir utilziador</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="primeiroNome">Primeiro Nome:</label>
        <input type="text" name="primeiroNome">
        <br>
        <label for="ultimoNome">Último Nome:</label>
        <input type="text" name="ultimoNome">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br><br>
        <button>Inserir</button>
    </form>

    <h2>Pesquisar</h2>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $pesquisaNome; ?>">
        <br><br>
        <button>Pesquisar</button>
    </form>

    <h2>Lista de Utilizadores</h2>
    <?php
        foreach($users As $user){
            echo "userID: ". $user->userID . "<br>";
            echo "Nome: ". $user->primeiroNome . " " . $user->ultimoNome . "<br>";
            echo "Email: ". $user->email . "<br>";
            echo "<a href=" . $_SERVER["PHP_SELF"] . "?eliminar=" . $user->userID . ">Eliminar</a>";
            echo "<br><br>";
        }
    ?>

</body>
</html>