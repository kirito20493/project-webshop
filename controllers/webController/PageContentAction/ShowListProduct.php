<?php
class ShowListProduct
{
    public function ShowListProduct(){
        $productModel = new ProductModel();
        $result = $productModel->getAllDataProduct();
        include_once 'views/web/showListProduct.php';
    }
}
?>