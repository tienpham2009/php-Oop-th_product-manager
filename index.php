<?php
include_once "Model/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProduct();

foreach ($products as $product){
    echo $product->getName()."<br/>";
}