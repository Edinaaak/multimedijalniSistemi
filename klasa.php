<?php

class shopProduct 
{
    public $name;
    public $surname;
    public $price;
    public $title;
}



$product1 = new shopProduct();
$product1->name = "Product1";
$product1->surname = "PrSurname";
$product1->price = 100;
$product1->title = "Title1";
echo $product1->name . "\n";
echo $product1->surname  . "\n";
echo $product1->price  . "\n";
echo $product1->title  . "\n";
?>

