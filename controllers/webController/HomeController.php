<?php
include_once './models/CatalogModel.php';
include_once './models/ProductModel.php';
include_once './models/OrderModel.php';
include_once './models/TransactionModel.php';
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
        // Add new Order
        case 'addOrder':
            include_once 'controllers/webController/PageContentAction/addOrder.php';
            $addOrder = new AddOrder();
            break;
        // DELETE Order
        case 'deleteOrder':
            include_once 'controllers/webController/PageContentAction/DeleteOrder.php';
            $deleteOrder = new DeleteOrder();
            break;
        // show DETAIL TRANSACTION
        case 'detailTransaction':
            include_once 'controllers/webController/PageContentAction/DetailTransaction.php';
            $detailTransaction = new DetailTransaction();
            break;
        // Add new transaction 
        case 'addTransaction':
            include_once 'controllers/webController/PageContentAction/AddTransaction.php';
            $addTransaction = new Addtransaction();
            break;
        // change transaction's status
        case 'payment':
            $transactionModel = new TransactionModel();
            $result = $transactionModel->updateStatusTransaction($_GET['transactionID']);
            $message = "Thanh toán thành công! Cảm ơn!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/emptyTransaction.php';
            break;
        }
        include_once 'views/web/footer.php';
    }   
}
?>