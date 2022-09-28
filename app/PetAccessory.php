<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/LitterSand.php';
include_once __DIR__ . '/PetBed.php';

class PetAccessory extends Product
{

    use LitterSand, PedBed;

    function __construct($param)
    {
        parent::__construct($param);
    }

    public function setMaterials($materials)
    {
        if (is_array($materials)) {
            $this->material = $materials;
        }
    }
}
