<?php

include __DIR__ . "/../classes/user.php";
include __DIR__ . "/../classes/food.php";
include __DIR__ . "/../classes/toys.php";
include __DIR__ . "/../classes/accessoires.php";


$users = [

    new User("Chiara", "Cardinale", "chiara@gmail", 3202367434, true),
    new User("Lara", "Filler", "lara@gmail", 3075467998, false),
    new User("Morgan", "Freeman", "morgan@gmail", 3001245864, false),
    new User("Rick", "Hawk", "rick@gmail", 3310982367, true),
    new User("Brian", "Thoy", "brian@gmail", 3501290570, false),
    new User("Vanessa", "Jones", "vanessa@gmail", 320563476, true)
    

];

$foods = [
    new Food("Almo Nature", "12-03-23", 2, 13,50),
    new Food("Natural Trainer", "25-12-25", 4, 12),
    new Food("Royal Canin", "12-01-26", 10, 29,99)
];

$toysList = [
    new Toys("Dog World", "plastic","red", 15),
    new Toys("Meow Cat", "plastic", "yellow", 20),
    new Toys("Fish Ocean", "plastic", "green", 35)
];

var_dump($users);
var_dump($foods);
var_dump($toysList);


?>