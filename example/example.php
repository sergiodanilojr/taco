<?php
require __DIR__ . "/../vendor/autoload.php";

use ElePHPant\Taco;

$taco = new Taco();

//Food Categories
$categories = $taco->categories(false);

//One Category
$category = $taco->category(1);

//Foods From Category
$foodFromCategory = $taco->foodFromCategory(1);

//Food by Id
$food = $taco->food(2);

//Change the Timeout
//$taco->setTimeout(3);
