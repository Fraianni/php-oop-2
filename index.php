<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Food.php';


$crocchette_monge = new Food('b-wild', 12, 10);
$crocchette_monge->deadline_year = 2025;
$crocchette_monge->type = 'secco';
$crocchette_monge->quantity = 10 . ' kg';

echo ($crocchette_monge->name . '<br>');
var_dump($crocchette_monge);
