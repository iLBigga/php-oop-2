<?php

include_once __DIR__ . '/Product.php';

class LitterSand extends Product {
    public $material;
    public $scented;

    function __construct($param)
    {
        parent::__construct($param);
        $this->material = $param['material'];
        $this->scented = $param['scented'];
    }
}

