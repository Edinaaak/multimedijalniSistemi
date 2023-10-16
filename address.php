<?php

//mozemo da definisemo striktne promenljive
class AddressManager
{
    private $addresses = ["209.131.36.159", "216.58.213.174"];

    public function outputAddress(bool $resolve)
    {
        foreach ($this->addresses as $address) {
            echo $address;
            
            if ($resolve) {
                $resolvedAddress = gethostbyaddr($address);
                
                if ($resolvedAddress !== $address) {
                    echo " (Resolved: " . $resolvedAddress . ")";
                } else {
                    echo " (Not Resolved)";
                }
            }
            
            echo "<br>";
        }
    }
}

// XML postavke za resolvedomains
$xml = simplexml_load_string('<settings><resolvedomains>false</resolvedomains></settings>');
$resolve = ($xml->resolvedomains == 'true') ? true : false;

$manager = new AddressManager();
$manager->outputAddress($resolve);


class Storage {
    public function addd(string $key, $value)
    {

    }

    public function add1(string $value, mixed $values2)
    {

    }

    public function  add3(string $value, bool|string $values)
    {


    }

    public function add4(string $key, ?string $value4)
    {

    }

    public function getValue():int 
    {
        return $this->Value;
    }

    public function Discount():int|float 
    {
        return $this->price-$this->discount;
    }


    public function setDiscount(int|float $num):void
    {
        $this->discount = $num;
    }
    //nullable tipovi sa prefiksom ?
}

?>