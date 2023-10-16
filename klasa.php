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

class shopPrinter
{

    function print(shopProduct $shopProduct)
    {
        echo "Name: " .$shopProduct->name . " Surname: " .$shopProduct->surname . " Price: " .$shopProduct->price ." Title: " .$shopProduct->title;
    }
}

class CDProduct {

}

class BookProdcut {
    
}

$product1 = new shopProduct("novoIme", "novoPrezime", 100, "noviTitl");
// u phpu 8 imamo definisane tipove, i kad npr cena je float, a mi stavimo "", to ce interpretirati kao float automatski

$book2 = new shopProduct("Edis", "Mekic", 100, "Book one");
$shopPrint = new shopPrinter();
$shopPrint->print($product1);


?>

