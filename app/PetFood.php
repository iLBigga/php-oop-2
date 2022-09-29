<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
    public $type;

    public function setType($type)
    {
        if (is_string($type)) {
            $this->type = $type;
        } else {
            throw new Exception('Invalid type');
        }
    }
}
