<?php
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


?>