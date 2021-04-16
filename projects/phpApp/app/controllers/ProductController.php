<?php

namespace App\controllers;
use App\models\Database;

class ProductController {
    protected $productsCollection;

    // method
    public function addproduct($postData) {
        // data collection from form
        $imageName = date('Y').'_'.$_FILES['image']['name']; // image name from files
        $tempPath = $_FILES['image']['tmp_name']; // temporary image path
        $imagePath = "uploads/images/{$imageName}"; // local path of image with image Name
        move_uploaded_file($tempPath,__DIR__."/../../{$imagePath}"); // move to temporary to image original path
        
        $name = $postData['name'];
        $slug = str_replace(' ','-',$postData['name']);
        $price = $postData['price'];
        $quantity = $postData['quantity'];
        $description = $postData['description'];
        $image = $imagePath;  // image path to save database

        // string converted
        $nameStr = "'".$name."'";
        $slugStr = "'".$slug."'";
        $descriptionStr = "'".$description."'";
        $imageStr = "'".$image."'";

        // insetQuery
        $insetQuery = "INSERT INTO products(name,slug,price,quantity,description,image) VALUES ($nameStr,$slugStr,$price,$quantity,$descriptionStr,$imageStr)";

        // data save database
        $productModelObject = new Database;
        $result = $productModelObject->insertData($insetQuery);

        if($result) {
            echo "Data Successfully Saved";
        }
        else {
            echo "Data Not Saved";
        }
    }

    public function getAllProducts() {
        // all selected products query
        $selectQuery = "SELECT * FROM products";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function getProductBySlug($slug) {
        // query by slug
        $selectQuery = "SELECT * FROM products WHERE slug='".$slug."'";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function getProductById($id) {
        // query by id
        $selectQuery = "SELECT * FROM products WHERE id=$id ";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function updateProduct($postData) {
        // data collection from name attribute in form 
        $name = $postData['name'];
        $price = $postData['price'];
        $quantity = $postData['quantity'];
        $description = $postData['description'];
        $product_id = $postData['product_id'];

        // string converted
        $nameStr = "'".$name."'";
        $descriptionStr = "'".$description."'";

        // updateQuery
        $updateQuery = "UPDATE products SET name = $nameStr, price = $price, quantity = $quantity, description = $descriptionStr WHERE id =  $product_id ";

        // data save database
        $productModelObject = new Database;
        $result = $productModelObject->updateData($updateQuery);

        if($result) {
            echo "Data Successfully Updated";
        }
        else {
            echo "Data Not Updated";
        }
    }

    public function deleteProductById($id) {
        // query by id
        $deleteQuery = "DELETE FROM products WHERE id = $id ";

        // data get from Database
        $productModelObject = new Database;
        $result =  $productModelObject->deleteData($deleteQuery);

        if($result) {
            header('Location:index.php');
        }
        else {
            echo "Product Not Deleted.";
        }
    }
}
