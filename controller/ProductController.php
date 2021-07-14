<?php


namespace Controller;


use Model\DBConnect;
use Model\ProductDB;
use Model\Products;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->productDB = new ProductDB();
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "view/product/add.php";
        } else {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];

            $data = [
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'quantity' => $quantity,
                'description' => $description
            ];

            $products = new Products($data);
            $this->productDB->create($products);
            header("location:index.php?page=list");
        }
    }

    public function getAll()
    {
        $products = $this->productDB->getAllProduct();
        include_once "view/product/list.php";
    }

    public function editProduct()
    {
        $id = $_REQUEST['id'];
        $products = $this->productDB->getAllProduct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "view/product/edit.php";
        } else {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];

            $data = [
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'quantity' => $quantity,
                'description' => $description
            ];

            $product = new Products($data);
            $this->productDB->updateProduct($id, $product);
            header("location:index.php?page=list");
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productDB->deleteProduct($id);
        header("location:index.php?page=list");
    }

    public function search()
    {
        $name = $_REQUEST['name'];
        $products = $this->productDB->searchProduct($name);
        include_once "view/product/list.php";
    }
}