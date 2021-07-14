<?php

$productController = new \Controller\ProductController();
$page = $_REQUEST['page'] ?? null;

switch ($page) {
    case 'add':
        $productController->addProduct();
        break;
    case 'list':
        $productController->getAll();
        break;
    case 'edit':
        $productController->editProduct();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'search':
        $productController->search();
        break;
}