<?php

class shopProduct 
{
    public string $name;
    public string $surname;
    public float $price;
    public string $title;

    function __construct(string $name, string $surname, float $price, string $title)
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
//UML KAKO SE KREIRA, MOZE L PREKO GITA
class CDProduct extends shopProduct {

     public int $duzinaTrajanja;
     function __construct(int $duzinaTrajanja)
     {
        $this->$duzinaTrajanja = $duzinaTrajanja;
     }

     public function playLength():int 
     {
        return $this->duzinaTrajanja;
     }

     public function print()
     {
        echo "Play length: ".$this->duzinaTrajanja;
     }
}

class BookProdcut  extends shopProduct {
    public $brojStrana;
    function __construct(int $brojStrana) 
    {
        $this->brojStrana = $brojStrana;
    }

    public function pageNumber() : int
    {
        return $this->brojStrana;
    }

    public function print()
    {
        echo "Page number: ".$this->brojStrana;
    }
}

$product1 = new shopProduct("novoIme", "novoPrezime", 100, "noviTitl");
// u phpu 8 imamo definisane tipove, i kad npr cena je float, a mi stavimo "", to ce interpretirati kao float automatski

$book2 = new shopProduct("Edis", "Mekic", 100, "Book one");
$shopPrint = new shopPrinter();
$shopPrint->print($product1);
$cd_product = new CDProduct(10);
$cd_product->print();
$book_product = new BookProdcut(55);
$book_product->print();

?>

