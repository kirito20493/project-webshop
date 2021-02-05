<?php
class showListCatalog
{
    public function showListCatalog(){
        $catalogModel = new CatalogModel();
        $result = $catalogModel->getDataCatalog();
        include_once 'views/admin/showListCatalog.php';
    }
}
?>