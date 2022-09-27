<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/LitterSand.php';

$data = [
    'name' => 'Crocchette cane adulto con manzo',
    'price' => 28.49,
    'brand' => 'Friskies',
    'description' => 'La confezione contiene 12 kg di Friskies Crocchette Cane Adulto con Manzo, Cereali e Verdure',
];

$crocchette = new PetFood($data);
var_dump($crocchette);

$data = [
    'name' => 'Palla da tennis con corda',
    'price' => 3.29,
    'brand' => 'Gim Dog',
    'description' => 'La palla da tennis con corda si presta a molteplici usi per il divertimento del tuo amico di zampa',
];

$petToy = new PetToy($data);
var_dump($petToy);

$data = [
    'name' => 'Sabbia per lettiera gatti',
    'price' => 15.21,
    'brand' => 'Almo nature',
    'description' => 'Sicura, naturale e non tossica: la lettiera è prodotta utilizzando solo fibre vegetali e non contiene additivi, quindi è sicura per il vostro gatto e per tutta la famiglia.',
];

$litterSand = new LitterSand($data);
var_dump($litterSand);