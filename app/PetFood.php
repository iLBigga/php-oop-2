<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{

    function __construct($param)
    {
        parent::__construct($param);
    }

    public function setType($type)
    {
        if (is_string($type)) {
            $this->type = $type;
        } else {
            throw new Exception('Invalid type');
        }
    }
}
