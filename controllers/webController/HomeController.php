<?php
include_once './models/CatalogModel.php';
include_once './models/ProductModel.php';
include_once './models/OrderModel.php';
class HomeController
{   
    public function handleRequestAction(){
        $action = isset($_GET['action'])?$_GET['action']:'page';
        include_once 'views/web/header.php';
        //navbarController -> views/navbar
        include_once 'controllers/webController/ListCatalog.php';
        $catalogNavbar = new ListCatalog();
        switch ($action){
        case 'page':
            include_once 'controllers/webController/PageContentAction/ShowListProduct.php';
            $showListProduct = new ShowListProduct();
            break;
        case 'logout':
            session_destroy();
            header('Location: index.php?controller=home&action=page');
            break;
        case 'showCatalog':
            include_once 'controllers/webController/PageContentAction/ShowCatalogItem.php';
            $showCatalogItem = new ShowCatalogItem();
            break;
        case 'inforProduct':
            include_once 'controllers/webController/PageContentAction/ShowInforProduct.php';
            $showInforProduct = new ShowInforProduct();
            break;
        }
        include_once 'views/web/footer.php';
    }   
}
?>