<?php

    class Book{
        private $title;
        private $author;
        private $price;

        function__construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        }

        function getTitle() {
        return $this->title;
        }

        function getAuthor() {
        return $this->author;
        }

        function getPrice() {
        return $this->price;
        }
    }

    //Instance a "book" object
    $livro1 = new Book("Harry Potter", "J. K. Rowling", 20.79);
    $livro2 = new Book("Biblia", "Deus", 99.99);
    $livro3 = new Book("Momo", "Thomas Mann", 15.68);
    $livro4 = new Book("Ensaio sobre a Cegueira", "Saramago", 23.77);

    $carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectos</title>
</head>
<body>

    <h1>Carrinho de Compras</h1>

    <?php foreach($carrinhoCompras as $livro){ ?>

        <h1><?php echo $harryPotter->getTitle(); ?></h1>
        Author: <?php echo $harryPotter->getAuthor(); ?><br>
        <strong><?php echo $harryPotter->getPrice(); ?>€<strong>
        
    <?php } ?>
        
</body>
</html>