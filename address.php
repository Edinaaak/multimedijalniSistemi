<?php
class AddressManager
{
    private $addresses = ["209.131.36.159", "216.58.213.174"];

    public function outputAddress($resolve)
    {
        foreach ($this->addresses as $address) {
            echo $address;
            if ($resolve) {
                echo " (" . gethostbyaddr($address) . ")";
            }
            echo "<br>";
        }
    }
}

// XML postavke za resolvedomains
$xml = simplexml_load_string('<settings><resolvedomains>false</resolvedomains></settings>');
$resolve = $xml->resolvedomains == 'true';


$manager = new AddressManager();
$manager->outputAddress($resolve);

?>