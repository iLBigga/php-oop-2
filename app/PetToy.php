<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Materials.php';

class PetToy extends Product
{
    public $target;

    use Materials;

    public function setTarget($target){
        $this->target= $target;
    }
}
