<?php

    class Book{
        private $title;
        private $author;
        private $price;

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
    }

    //Instance a "book" object
    $livro1 = new Book("Harry Potter", "J. K. Rowling", 20.79);
    $livro2 = new Book("Biblia", "Deus", 99.99);
    $livro3 = new Book("Momo", "Thomas Mann", 15.68);
    $livro4 = new Book("Ensaio sobre a Cegueira", "Saramago", 23.77);

    $carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);
    
    function getTotal($carrinhoCompras) {
        $total = 0;
        foreach ($carrinhoCompras as $livro) {
            $total += $livro->getPrice();
        }
        return $total;
    }

    function getDescontoLivros($carrinhoCompras) {
        foreach ($carrinhoCompras as $livro) {
            $price = 0;
            if ($price >= 20) {
                $price > $livro->getTitle();
            }
        }
        return $price;
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>

    <h1>Carrinho de Compras</h1>

    <?php foreach($carrinhoCompras as $livro) { ?>

        <h2><?php echo $livro->getTitle(); ?></h2>
        Author: <?php echo $livro->getAuthor(); ?><br>
        <strong><?php echo $livro->getPrice(); ?>€<strong>

    <?php } ?>

    <h3>Total: <?php echo getTotal($carrinhoCompras); ?>€</h3>

    <h3>Livros com desconto: <?php echo getDescontoLivros($carrinhoCompras); ?></h3>
        
</body>
</html>