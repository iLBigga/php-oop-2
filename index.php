<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccessory.php';
include_once __DIR__ . '/app/Order.php';

$data = [
    'name' => 'Crocchette cane adulto con manzo',
    'price' => 28.49,
    'brand' => 'Friskies',
    'description' => 'La confezione contiene 12 kg di Friskies Crocchette Cane Adulto con Manzo, Cereali e Verdure',
];

$crocchette = new PetFood($data);
try {
    $crocchette->setQuantity(8);
} catch (Exception $e) {
    echo $e->getMessage();
}
$crocchette->setType('Secco');
var_dump($crocchette);

$data = [
    'name' => 'Purina gourmet',
    'price' => 10.72,
    'brand' => 'Purina',
    'description' => '24 lattine patè al manzo',
];

$patè = new PetFood($data);
$patè->setQuantity(3);
try {
    $patè->setType('Umido');
} catch (Exception $e) {
    echo $e->getMessage();
}
var_dump($patè);

$data = [
    'name' => 'Palla da tennis con corda',
    'price' => 3.29,
    'brand' => 'Gim Dog',
    'description' => 'La palla da tennis con corda si presta a molteplici usi per il divertimento del tuo amico di zampa',
];

$palla = new PetToy($data);
try {
    $palla->setQuantity('5');
} catch (Exception $e) {
    echo $e->getMessage();
}
$palla->setMaterial('Cotone');
var_dump($palla);

$data = [
    'name' => 'Sabbia per lettiera gatti',
    'price' => 15.21,
    'brand' => 'Almo nature',
    'description' => 'Sicura, naturale e non tossica: la lettiera è prodotta utilizzando solo fibre vegetali e non contiene additivi, quindi è sicura per il vostro gatto e per tutta la famiglia.',
];

$sabbiaPerLettiere = new PetAccessory($data);
try {
    $sabbiaPerLettiere->setQuantity(5);
} catch (Exception $e) {
    echo $e->getMessage();
}
$sabbiaPerLettiere->setScented('Borotaclo');
$sabbiaPerLettiere->setMaterials(['Sabbia di quarzo', 'calce naturale']);
var_dump($sabbiaPerLettiere);

$data = [
    'name' => 'Cuccia per cani',
    'price' => 32.89,
    'brand' => 'Feandrea',
    'description' => 'Rendi il tuo cucciolo ancora più felice con la sua cuccia personale',
];

$cuccia = new PetAccessory($data);
try {
    $cuccia->setQuantity(4);
} catch (Exception $e) {
    echo $e->getMessage();
}
$cuccia->setColor('Marrone');
try{
    $cuccia->setSize([75, 66, 20]);
} catch (Exception $e) {
    echo $e->getMessage();
}
$cuccia->setMaterials(['Tessuto Oxford', 'Tessuno Felpato']);
var_dump($cuccia);

$order = new Order([$crocchette, $palla, $sabbiaPerLettiere, $cuccia]);
var_dump($order);
