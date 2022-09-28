<?php

class Product {
    public $name;
    public $description;
    public $brand;
    public $price;
    public $quantity;

    function __construct($param)
    {
        $this->name = $param['name'];
        $this->price = $param['price'];
        $this->description = $param['description'];
        $this->brand = $param['brand'];
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        if(is_int($quantity)) {
            $this->quantity = $quantity;
        }
    }
}