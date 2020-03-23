<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores e Livros</title>

</head>
<body>
    <?php

        class Autor {
            private $nome;
            private $email;

            public function __construct($nome, $email) {
                $this -> nome = $nome;
                $this -> email = $email;
            }
            
            public function getNome() {
                return $this -> nome;
            }
        } 

        class Livro {
            private $nome;
            private $listaAutores;
            private $preco;

            public function __construct($nome, $listaAutores, $preco) {
                $this -> nome = $nome;
                $this -> listaAutores = $listaAutores;
                $this -> preco = $preco;
            }

            public function getNomeLivro() {
                echo $this -> nome;
            }

            public function getListaAutores() {
                return $this -> listaAutores;
            }

            public function getNomesAutores() {
                $nomeAutor = array();
                foreach ($this -> listaAutores as $autor) {
                    array_push($nomeAutor, $autor -> getNome());
                }

                return $nomeAutor;
            }

            public function getPreco() {
                echo $this -> preco;
            }
        }

        $autor = new Autor('Autor', 'simao@mail.com');
        $arrayAutores = array($autor);
        $livro = new Livro('Programação Web', $arrayAutores, 20);
        echo 'Nome do Livro: ';
        $livro -> getNomeLivro();
        $nomeAutor = $livro -> getNomesAutores();
        foreach ($nomeAutor as $nome) {
            echo '<br>' . 'Nome: ' . $nome . '<br>';
        }
        //echo '<br>' . 'Autor: ';
        $listaAutores = $livro -> getListaAutores();
        echo 'Preço: ';
        $livro -> getPreco();
        echo '€';
    ?>
</body>
</html>