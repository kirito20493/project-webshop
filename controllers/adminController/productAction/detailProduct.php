<?php
class detailProduct
{
    public function detailProduct(){
        $productModel = new ProductModel();
        if(isset($_GET['id'])){
            $productID = $_GET['id'];
            $result = $productModel->getDataByProductId($productID);
        }
        include_once 'views/admin/detailProduct.php';
    }
}
?>