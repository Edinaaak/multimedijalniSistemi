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
     function __construct(string $name, string $surname, float $price, string $title, int $duzinaTrajanja) 
     {
         parent::__construct($name, $surname, $price, $title);
         $this->duzinaTrajanja = $duzinaTrajanja;
     }

     public function playLength():int 
     {
        return $this->duzinaTrajanja;
     }

     public function print()
     {
        echo "<br><strong>CD product printer: </strong>";
        echo "<br>Name: " .$this->name . " Surname: " .$this->surname . " Price: " .$this->price ." Title: " .$this->title;
        echo "<br>Play length: ".$this->duzinaTrajanja;
     }
}

//treba da ima isti konstruktor, i na kraju dodat je atribut brojStrana
class BookProdcut  extends shopProduct {
    public $brojStrana;
    function __construct(string $name, string $surname, float $price, string $title, int $brojStrana) 
    {
        parent::__construct($name, $surname, $price, $title);
        $this->brojStrana = $brojStrana;
    }

    public function pageNumber() : int
    {
        return $this->brojStrana;
    }

    public function print()
    {
        echo "<br><strong>Book product printer: </strong>";
        echo "<br>Name: " .$this->name . " Surname: " .$this->surname . " Price: " .$this->price ." Title: " .$this->title;
        echo "<br>Page number: ".$this->brojStrana;
    }
}

$product1 = new shopProduct("novoIme", "novoPrezime", 100, "noviTitl");
// u phpu 8 imamo definisane tipove, i kad npr cena je float, a mi stavimo "", to ce interpretirati kao float automatski

$book2 = new shopProduct("Edis", "Mekic", 100, "Book one");
$shopPrint = new shopPrinter();
$shopPrint->print($product1);
$book_product = new BookProdcut("Edis", "Mekic", 100, "Book one", 55);
$book_product->print();
$cd_product = new CDProduct("Edis", "Mekic", 100, "Book one", 100);
$cd_product->print();

?>

