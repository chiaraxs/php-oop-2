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

    <h2>I prodotti nel nostro shop:</h2>
    
    <!-- php -->
    <?php foreach ($items as $item) { ?>

        <p>Brand: <?php echo ($item->print()) ?></p>
        <hr>

    <?php } ?>
    <!-- / php -->

</body>

</html>