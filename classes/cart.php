<!-- collegata a User e CreditCard
qui va una lista di prodotti in carrello -->

<?php

require_once __DIR__ . "/user.php";
require_once __DIR__ . "/creditCard.php";
require_once __DIR__ . "/accessoires.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toys.php";

$cart = [];
class Cart {
    protected array $productList=[];

    public function getTotal(){
        // stampa totale
    }

    // public function addItem(Product $item){
    //     $cart = new Cart ($item);
    //     $cart->addItem($item);
       
    //     return $this->$items;

    //     $this->cart[] = $cart;
    // }
}

// $cart = new Cart($user, $products);
// $cart->addItem($food);
// echo $cart->getTotal();



var_dump($cart);

?>