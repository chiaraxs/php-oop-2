<?php

include __DIR__ . "/../classes/user.php";
include __DIR__ . "/../classes/food.php";
include __DIR__ . "/../classes/toys.php";
include __DIR__ . "/../classes/accessoires.php";
include __DIR__ . "/../classes/cart.php";



$users = [

    new User("Chiara", "Cardinale", "chiara@gmail", 3202367434, true),
    new User("Lara", "Filler", "lara@gmail", 3075467998, false),
    new User("Morgan", "Freeman", "morgan@gmail", 3001245864, false),
    new User("Rick", "Hawk", "rick@gmail", 3310982367, true),
    new User("Brian", "Thoy", "brian@gmail", 3501290570, false),
    new User("Vanessa", "Jones", "vanessa@gmail", 320563476, true)
    
];

$items = [
   
    new Food("Mangime per animali", 323,"Cibo","Almo Nature", "12-03-23", 2, 13.50),
    new Food("Mangime per animali", 456, "Cibo", "Natural Trainer", "25-12-25", 4, 12),
    new Food("Mangime per animali", 625, "Cibo", "Royal Canin", "12-01-26", 10, 29, 13.12),
    
    new Toys("Giochi per animali", 123, "Gioco per cani", "Dog World", "rubber","red", 15.35),
    new Toys("Giochi per animali", 678, "Gioco per gatti", "Meow Cat", "plastic", "yellow", 20.03),
    new Toys("Giochi per animali", 999, "Gioco per pesci", "Fish Ocean", "silicone", "green", 12.6),

    new Accessoires("Accessori per animali", 897, "Collare", "Dog World", "leather", "white", 23.20),
    new Accessoires("Accessori per animali", 156, "Cuccia", "Meow Cat", "tissue", "black", 50.60),
    new Accessoires("Accessori per animali", 222, "Ciotola", "Fish Ocean", "plastic", "pink", 4),

];

$cart = [];

var_dump($users);
var_dump($items);


?>