<?php
require __DIR__ . "./models/Category.php";
require __DIR__ . "./models/Products.php";
require __DIR__ . "./models/Food.php";
require __DIR__ . "./models/Game.php";



$dogsCategory = new Category("Dogs", "fa-solid fa-dog");
$catsCategory = new Category("Cats", "fa-solid fa-cat");
$productCategories = [$dogsCategory, $catsCategory];


$products = [
    new Product("Collare rosso", 12.00, true, 99, "https://picsum.photos/id/237/400/300", $dogsCategory),
    new Food("Crochette 1Kg", 12.00, true, 99, "https://picsum.photos/id/659/400/300", $dogsCategory, 300),
    new Game("Giocchi per gatti", 12.00, true, 99, "https://picsum.photos/id/40/400/300", $catsCategory, "sport", "verde"),
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>php-oop-2</title>
</head>

<body>

    <div>
        <div class="container">
            <h1>Categories</h1>
            <div class="containerCard">
                <?php foreach ($productCategories as $category) { ?>
                    <div class="card">
                        <p><i class=" <?= $category->icon ?> "></i></p>
                        <span><?= $category->name ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container">
            <h1>Products</h1>
            <div class="containerCard">
                <?php foreach ($products as $pro) { ?>
                    <div class="card">
                        <h3><?= $pro->name ?></h3>
                        <p>Price: <?= $pro->price ?> $ </p>
                        <p>Prodotto di tipo <?= get_class($pro) ?></p>
                        <p>
                            <?php if ($pro instanceof Game) { ?>
                                Colore: <?= $pro->getColor() ?>
                                Genere: <?= $pro->getGenre() ?>
                            <?php } else if ($pro instanceof Food) { ?>
                                Calories: <?= $pro->getCalories() ?>
                            <?php } ?>

                        </p>

                        <div>
                            Category: <?= $pro->category->name  ?>
                            <i class=" <?= $pro->category->icon   ?> "></i>
                        </div>
                        <img src="<?= $pro->image ?>" alt="<?= $product->name ?>">
                    </div>



                <?php } ?>
            </div>
        </div>






    </div>
</body>

</html>