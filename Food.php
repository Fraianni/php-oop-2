<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $deadline_year;
    public $type;
    public $quantity;
}
