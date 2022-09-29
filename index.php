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
    $palla->setQuantity(5);
} catch (Exception $e) {
    echo $e->getMessage();
}
$palla->setTarget('Cane');
$palla->setMaterials(['Cotone', 'Gomma']);
$palla->addSize([10, 5, 3]);
var_dump($palla);


$data = [
    'name' => 'Robot Mouse',
    'price' => 2.50,
    'brand' => 'Mouse Robotic',
    'description' => 'Fai divertitre il tuo gatto con il nuovo Topolino automatizzato',
];

$topolino = new PetToy($data);
try {
    $topolino->setQuantity(2);
} catch (Exception $e) {
    echo $e->getMessage();
}
$topolino->setTarget('Gatto');
$topolino->setMaterials('Peluche');
$topolino->addSize([12, 4, 3]);
var_dump($topolino);

$data = [
    'name' => 'Sabbia lettiera naturale',
    'price' => 21.99,
    'brand' => 'Amazing Sand',
    'description' => 'Migliora l\'esperieza sensoriale del tuo gatto e soprattuo Elimina i cattivi odori',
];


$sabbiaPerLettiere = new PetAccessory($data);
try {
    $sabbiaPerLettiere->setQuantity(5);
} catch (Exception $e) {
    echo $e->getMessage();
}
$sabbiaPerLettiere->setMaterials(['Cristalli di silice', 'Tofu']);
$sabbiaPerLettiere->setCategory('Igene dell\'animale');
$sabbiaPerLettiere->addSize([21, 18, 26]);
var_dump($sabbiaPerLettiere);



$data = [
    'name' => 'Spazzola Toelettatura 2000',
    'price' => 13.99,
    'brand' => 'Spazzolami',
    'description' => 'Spazzola il tuo animale con la nuova Spazzola 2000!',
];

$spazzola = new PetAccessory($data);
try {
    $spazzola->setQuantity(3);
} catch (Exception $e) {
    echo $e->getMessage();
}
$spazzola->setMaterials(['Plastica', 'Acciaio']);
$spazzola->setCategory('Cura dell\'animale');
$spazzola->addSize([17, 10, 8]);
var_dump($spazzola);


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
$cuccia->setMaterials(['Tessuto Oxford', 'Fibra di poliestere']);
$cuccia->setCategory('Comfort dell\'animale');
$cuccia->addSize([35, 27, 14]);
var_dump($cuccia);


$order = new Order([$crocchette, $palla, $sabbiaPerLettiere, $cuccia, $spazzola, $topolino]);
var_dump($order);
