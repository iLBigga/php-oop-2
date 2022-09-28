<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product {
    public $type;

    function __construct($param)
    {
        parent::__construct($param);
        $this->type = $param['type'];
    }
}