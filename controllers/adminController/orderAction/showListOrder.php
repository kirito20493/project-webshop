<?php
class showListOrder
{
    public function showListOrder(){
        $transactionModel = new TransactionModel();
        $result = $transactionModel->getAllDataTransaction();
        include_once 'views/admin/showListOrder.php';
    }
}
?>