<?php
class ShowCatalogItem
{
    public function ShowCataLogItem(){
        $productModel = new ProductModel();
        $catalogModel = new CatalogModel();
        if (isset($_GET['id'])){
            $catalogID = $_GET['id'];
            $result = $productModel->getDataProductWithCatalogID($catalogID);
        } 

        include_once 'views/web/showListProduct.php';
    }
}
?>