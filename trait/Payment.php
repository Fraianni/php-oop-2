<?php

require_once __DIR__ . './trait/CreditCard.php';


trait Payment
{
    public $lat;
    public $lng;
    public function getAddress()
    {
        return $address;
    }
}
