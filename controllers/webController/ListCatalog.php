<?php
class ListCatalog
{
    public function ListCataLog(){
        $catalogModel = new CatalogModel();
        $result = $catalogModel->getDataCatalog();
        include_once 'views/web/header_navbar.php';
    }
}
?>