<?php

    class Book{
        private $title;
        private $author;
        private $price;
        private $total;

        function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        }

        //Methods
        function getTitle() {
            return $this->title;
        }

        function getAuthor() {
            return $this->author;
        }

        function getPrice() {
            return $this->price;
        }

        function getTotal() {
            return $this->total;
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

    <?php foreach($carrinhoCompras as $livro) { ?>

        <h2><?php echo $livro->getTitle(); ?></h2>
        Author: <?php echo $livro->getAuthor(); ?><br>
        <strong><?php echo $livro->getPrice(); ?>€<strong>

    <?php } ?>

    <?php foreach ($carrinhoCompras as $total) { ?>
        
        <?php $total=array("livro1"=>20.79,"livro2"=>99.99,"livro3"=>15.68,"livro4"=>23.77); ?>

    <?php } ?>

    <h3>Total: <?php echo array_sum($total); ?></h3>
        
</body>
</html>