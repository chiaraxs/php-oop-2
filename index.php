<?php

include __DIR__ . "/db/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet E-commerce</title>
</head>

<body>

    <h2>Gli accessori nel nostro shop:</h2>
    <!-- php -->
    <?php foreach ($accessoiresList as $products) { ?>

        <p>Il prodotto: <?php echo ($products->getProductName()) ?></p>
        <p>Il brand: <?php echo ($products->getBrand()) ?></p>
        <p>Il tipo: <?php echo ($products->getProductType()) ?></p>
        <p>Il colore: <?php echo ($products->getColor()) ?></p>
        <p>Il prezzo: <?php echo ($products->getPrice()) ?> €</p>

        <hr><br>

    <?php } ?>
    <!-- / php -->

    <h2>Il cibo nel nostro shop:</h2>
    <!-- php -->
    <?php foreach ($foodsList as $products) { ?>

        <p>Il brand: <?php echo ($products->getBrand()) ?></p>
        <p>Il peso: <?php echo ($products->getWeight()) ?> Kg</p>
        <p>La data di scadenza: <?php echo ($products->getExpirationDate()) ?></p>
        <p>Il prezzo: <?php echo ($products->getPrice()) ?> €</p>

        <hr><br>

    <?php } ?>
    <!-- / php -->

    <h2>I giochi nel nostro shop:</h2>
    <!-- php -->
    <?php foreach ($toysList as $products) { ?>

        <p>Il brand: <?php echo ($products->getBrand()) ?></p>
        <p>Il materiale: <?php echo ($products->getMaterial()) ?></p>
        <p>Il colore: <?php echo ($products->getColor()) ?></p>
        <p>Il prezzo: <?php echo ($products->getPrice()) ?> €</p>

        <hr><br>

    <?php } ?>
    <!-- / php -->

</body>

</html>