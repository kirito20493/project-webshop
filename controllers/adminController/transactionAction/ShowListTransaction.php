<?php
class ShowListTransaction
{
    public function ShowListTransaction(){
        $transactionModel = new TransactionModel();
        $result = $transactionModel->getAllDataTransaction();
        include_once 'views/admin/showListTransaction.php';
    }
}
?>