<!-- L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto
su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo 
particolare (es. da maggio ad agosto). -->



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

    <!-- php -->
    <?php foreach ($users as $user) { ?>
        <h5> <?php echo ($user->getUserDetails()) ?></h5>
    <?php } ?>
    <!-- / php -->


</body>

</html>