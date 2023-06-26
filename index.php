<?php
require __DIR__ . "./models/Category.php";
require __DIR__ . "./models/Products.php";



$dogsCategory = new Category("Dogs", "fa-solid fa-dog");
$catsCategory = new Category("Cats", "fa-solid fa-cat");
$productCategories = [$dogsCategory, $catsCategory];


$products = [
    new Product("Collare rosso", 12.00, true, 99, "https://picsum.photos/400/300", $dogsCategory),
    new Product("Crochette 1Kg", 12.00, true, 99, "https://picsum.photos/400/300", $dogsCategory),
    new Product("Palla da Tennis", 12.00, true, 99, "https://picsum.photos/400/300", $catsCategory),
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
                        <p>Price <?= $pro->price ?> " </p>
                        <p><i class=" <?= $category->name ?> "></i></p>
                        <p>Category <?= $pro->category->name  ?></p>
                        <img src="<?= $pro->image ?>" alt="<?= $product->name ?>">

                    </div>

                <?php } ?>
            </div>
        </div>






    </div>
</body>

</html>