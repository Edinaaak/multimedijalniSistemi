<?php

class shopProduct 
{
    public $name;
    public $surname;
    public $price;
    public $title;

    function __construct($name, $surname, $price, $title)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->price = $price;
        $this->title = $title;

    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name_surname()
    {
        return $this->name . " " . $this->surname;
    }
}



$product1 = new shopProduct("novoIme", "novoPrezime", "novaCena", "noviTitl");
// $product1->name = "Product1";
// $product1->surname = "PrSurname";
// $product1->price = 100;
// $product1->title = "Title1";

echo $product1->name . "<br>";
echo $product1->surname . "<br>";
echo $product1->price . "<br>";
echo $product1->title . "<br>";

echo $product1->set_name("new_name");
echo $product1->get_name_surname();

?>

