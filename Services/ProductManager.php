<?php

namespace Services;

class ProductManager
{
    private array $product;

    public function __construct()
    {
        $this->product = [] ;
    }
    public function add($product){
        $this->product[] = $product;
    }

    public function getProduct(): array{
        return $this->product;
    }
}
