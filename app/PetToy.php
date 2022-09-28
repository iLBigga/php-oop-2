<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product {
    public $material;

    function __construct($params)
    {
        parent::__construct($params);
        $this->material = $params['material'];
    }

}