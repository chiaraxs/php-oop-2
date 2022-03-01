<!-- collegata a User e CreditCard
qui va una lista di prodotti in carrello -->

<?php

require_once __DIR__ . "/user.php";
require_once __DIR__ . "/creditCard.php";

class Cart {
    protected array $items=[];

    public function getTotal(){
        // stampa totale
    }

    public function addItem(Product $item){
        
    }
}

// $cart = new Cart($user, $products);
// $cart->addItem($food);
// echo $cart->getTotal();


?>