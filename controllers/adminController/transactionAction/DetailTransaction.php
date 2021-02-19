<?php
class DetailTransaction
{
    public function DetailTransaction(){
        $orderModel = new OrderModel();
        $transactionModel = new TransactionModel();
        if(isset($_GET['id'])){
            $orderResult = $orderModel->getDataByTransactionID($_GET['id']);
        }
        include_once 'views/admin/detailTransaction.php';
    }
}
?>