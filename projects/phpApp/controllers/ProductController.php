<?php

include('../models/Database.php');

class ProductController {
    protected $productsCollection;

    // method
    public function getProducts() {
        $productsDataObj = new Database;
        $this->productsCollection = $productsDataObj->getProductsData();
        return $this->productsCollection['name'];
    }
}
