<?php
class ShowInforProduct
{
    public function ShowInforProduct(){
        $productModel = new ProductModel();
        if (isset($_GET['id'])){
            $productID = $_GET['id'];
            $result = $productModel->getDataProductWithProductID($productID);
        }
        
        include_once 'views/web/showInforProduct.php';
    }
}
?>