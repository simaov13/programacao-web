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

    $mysqli = new mysqli("localhost", "root", "", "pw2");
    $mysqli->set_charset('utf8');

    if ($mysqli->connect_error != "") {
        die("Could not connect! ".$mysqli->connect_error);
    }
    
    //console_log("Conncetion to DB estalished!");

    $sql = "SELECT * FROM user";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        $users = array();

        while ($row = $result->fetch_assoc()) {
            $user = new User($row["userID"], $row["primeiroNome"], $row["ultimoNome"], $row["email"]);
            array_push($users, $user);
        }

        echo "<br>";
        echo "<h2>Utilizadores registados: </h2>";

        foreach($users As $user){
            echo "userID: ". $user->userID . "<br>";
            echo "name: ". $user->name . "<br>";
            echo "email: ". $user->emails . "<br>";
        }

        echo "<br>";
    }
    
    $mysqli->close();
?>