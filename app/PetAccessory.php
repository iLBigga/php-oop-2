<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Materials.php';
include_once __DIR__ . '/Size.php';

class PetAccessory extends Product
{
    public $category;

    use Materials, Size;

    public function setCategory($category){
        $this->category = $category;
    }

    public function addSize(array $size){
        $this->setSize($size);
    }
}
