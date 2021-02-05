<?php
class detailCatalog
{
    public function detailCatalog(){
        $productModel = new ProductModel();
        $catalogModel = new CatalogModel();
        $resultCTL = $catalogModel->getRowDataCatalog($_GET['id']);
        $dataCTL = $resultCTL->fetch_assoc();
        $result = $productModel->getDataProductByCatalogId($_GET['id']);
        include_once 'views/admin/detailCatalog.php';
    }
}
?>