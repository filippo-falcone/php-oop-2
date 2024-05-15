<?php
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Game.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/db.php';

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
    <?php foreach ($products as $product) { ?>
        <div>
            <h2><?php echo $product->name; ?></h2>
            <?php if (isset($product->size)) { ?>
                <div><?php echo $product->size; ?></div>
            <?php } ?>
            <?php if (isset($product->type)) { ?>
                <div><?php echo $product->type; ?></div>
            <?php } ?>
            <?php if (isset($product->weight)) { ?>
                <div><?php echo $product->getWeight(); ?></div>
            <?php } ?>
        </div>
    <?php } ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- /Bootstrap JS -->
</body>
</html>