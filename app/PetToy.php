<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{

    function __construct($params)
    {
        parent::__construct($params);
    }

    public function setMaterial($material)
    {
        if (is_string($material)) {
            $this->material = $material;
        }
    }
}
