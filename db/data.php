<?php

include __DIR__ . "/../classes/user.php";
include __DIR__ . "/../classes/food.php";
include __DIR__ . "/../classes/toys.php";
include __DIR__ . "/../classes/accessoires.php";


$users = [

    new User("Chiara", "Cardinale", "chiara@gmail", 3202367434, true, 456356),
    new User("Lara", "Filler", "lara@gmail", 3075467998, false, 567456),
    new User("Morgan", "Freeman", "morgan@gmail", 3001245864, false, 3457886),
    new User("Rick", "Hawk", "rick@gmail", 3310982367, true, 34565667 ),
    new User("Brian", "Thoy", "brian@gmail", 3501290570, false, 4589877),
    new User("Vanessa", "Jones", "vanessa@gmail", 320563476, true, 2345688)
    

];

$foods = [
    new Food("Almo Nature", "12-03-23", 2, 13,50),
    new Food("Natural Trainer", "25-12-25", 4, 12),
    new Food("Royal Canin", "12-01-26", 10, 29,99)
];

$toysList = [
    new Toys("Almo Nature", "12-03-23", 2, 13, 50),
    new Toys("Natural Trainer", "25-12-25", 4, 12),
    new Toys("Royal Canin", "12-01-26", 10, 29, 99)
];

var_dump($users);
var_dump($foods);


?>