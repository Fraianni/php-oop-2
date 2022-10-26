<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Registered.php';
require_once __DIR__ . '/CreditCard.php';




$crocchette_monge = new Food('b-wild', 12, 10);
$crocchette_monge->deadline_year = 2025;
$crocchette_monge->type = 'secco';
$crocchette_monge->quantity = 10 . ' kg';

echo ($crocchette_monge->name . '<br>');
var_dump($crocchette_monge);

$kong_ball = new Toy('kong_ball', 5, 30);
$kong_ball->brand = 'kong';
$kong_ball->size = 'L';

echo ($kong_ball->name . '<br>');
var_dump($kong_ball);

$pippo = new User('pippo', 'rossi');

$pippo->add_card(102030, 1567, 2023);

$pippo->buy($kong_ball->getPrice());

$paperino = new User('paperino', 'bianchi');

$paperino->add_card(102030, 128, 2025);

$paperino->iscriviti('fra12', 'ciao');

$paperino->buy($crocchette_monge->getPrice());
