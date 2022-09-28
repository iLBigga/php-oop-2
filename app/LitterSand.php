<?php

include_once __DIR__ . '/Product.php';

class LitterSand extends Product
{

    function __construct($param)
    {
        parent::__construct($param);
    }

    public function setScented($scented)
    {
        if (is_string($scented)) {
            $this->scented = $scented;
        }
    }

    public function setMaterial($material)
    {
        if (is_string($material)) {
            $this->material = $material;
        }
    }
}
