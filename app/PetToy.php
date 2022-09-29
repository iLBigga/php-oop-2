<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Materials.php';
include_once __DIR__ . '/Size.php';

class PetToy extends Product
{
    public $target;

    use Materials, Size;

    public function setTarget($target){
        $this->target= $target;
    }

    public function addSize(array $size){
        $this->setSize($size);
    }
}
