<?php

    class user {
        public $utilizador;
        public $password;
    }

    $name = $_POST["user"];
    $pass = $_POST["pass"];

    $user1 = new user();
    $user1->utilizador="user1";
    $user1->password="password1";

    $user2 = new user();
    $user2->utilizador="user2";
    $user2->password="password2";

    $user3 = new user();
    $user3->utilizador="user3";
    $user3->password="password3";

    $arrayusers=array($user1,$user2,$user3);
    echo $name . "<br>";
    foreach($arrayusers as $user){
        if($user->utilizador == $name){
            echo "Utilizador Existente!<br>";
            if($user->password == $pass){
                echo "Password correta!";
                echo "Login Efetuado!";
            }
        }
    }

?>