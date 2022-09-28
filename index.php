<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/LitterSand.php';
include_once __DIR__ . '/app/Order.php';

$data = [
    'name' => 'Crocchette cane adulto con manzo',
    'price' => 28.49,
    'brand' => 'Friskies',
    'description' => 'La confezione contiene 12 kg di Friskies Crocchette Cane Adulto con Manzo, Cereali e Verdure',
    'type' => 'Secco'
];

$crocchette = new PetFood($data);
$crocchette->setQuantity(1);
var_dump($crocchette);

$data = [
    'name' => 'Palla da tennis con corda',
    'price' => 3.29,
    'brand' => 'Gim Dog',
    'description' => 'La palla da tennis con corda si presta a molteplici usi per il divertimento del tuo amico di zampa',
    'material' => 'Cotone'
];

$palla = new PetToy($data);
$palla->setQuantity(3);
var_dump($palla);

$data = [
    'name' => 'Sabbia per lettiera gatti',
    'price' => 15.21,
    'brand' => 'Almo nature',
    'description' => 'Sicura, naturale e non tossica: la lettiera è prodotta utilizzando solo fibre vegetali e non contiene additivi, quindi è sicura per il vostro gatto e per tutta la famiglia.',
    'material' => 'Calcare',
    'scented' => 'Talco',
];

$litterSand = new LitterSand($data);
$litterSand->setQuantity(2);
var_dump($litterSand);


$order = new Order([$crocchette, $palla, $litterSand]);

var_dump($order);