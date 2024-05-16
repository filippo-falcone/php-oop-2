<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
</head>
<body>
    <?php require_once __DIR__ . '/partials/template/header.php'; ?>
    <main>
        <?php foreach($categories as $category) { ?>
            <section class="<?php echo $category->name; ?>">
                <div class="container py-4">
                    <h1><?php echo $category->name; ?></h1>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                        <?php foreach($products as $product) { ?>
                            <?php if ($product->category->name == $category->name) { ?>    
                                <div class="col d-flex justify-content-center align-items-start">
                                    <div class="card" style="width: 18rem;">
                                        <div class="image-container d-flex justify-content-center align-items-center">
                                            <img src="<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" height="150">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?></p>
                                            <p class="card-text">Materiale: <?php echo $product->material; ?></p>
                                            <?php if (property_exists($product, 'color')) { ?>
                                                <p class="card-text">Colore: <?php echo $product->getColor(); ?></p>
                                            <?php } ?>
                                            <?php if (property_exists($product, 'size')) { ?>
                                                <p class="card-text">Taglia: <?php echo $product->getSize(); ?></p>
                                            <?php } ?>
                                            <?php if (isset($product->type)) { ?>
                                                <p class="card-text">Tipologia di gioco: <?php echo $product->type; ?></p>
                                            <?php } ?>
                                            <?php if (isset($product->weight)) { ?>
                                                <p class="card-text">Peso: <?php echo $product->getWeight(); ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- /Bootstrap JS -->
</body>
</html>