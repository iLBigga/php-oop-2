<?php

class Order
{
    private $total;

    function __construct($product)
    {
        $this->products = $product;
        $this->getPrice($product);
    }

    private function getPrice($products) {
        foreach($products as $product)
            $this->total += ($product->getPrice() * $product->getQuantity());
    }
}
