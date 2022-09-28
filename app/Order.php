<?php

class Order
{
    public $products = [];
    public $total;

    function __construct($product)
    {
        $this->products = $product;
        $this->getPrice($product);
    }

    public function getPrice($products) {
        foreach($products as $product)
            $this->total += ($product->getPrice() * $product->getQuantity());
    }
}
