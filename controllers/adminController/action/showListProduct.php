<?php
class showListProduct
{
    public function showListProduct(){
        $productModel = new ProductModel();
        $result = $productModel->getAllDataProduct();
        include_once 'views/admin/showListProduct.php';
    }
}
?>