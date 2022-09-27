<?php

class Product {
    public $name;
    public $description;
    public $brand;
    public $price;

    function __construct($param)
    {
        $this->name = $param['name'];
        $this->price = $param['price'];
        $this->description = $param['description'];
        $this->brand = $param['brand'];
    }
}