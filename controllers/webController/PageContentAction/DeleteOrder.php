<?php
class DeleteOrder
{
    public function DeleteOrder(){
        $orderModel = new OrderModel();
        $transactionModel = new TransactionModel();
        if (isset($_GET['orderID']) && isset($_GET['transactionID'])){
            $orderID = $_GET['orderID'];
            $transactionID = $_GET['transactionID'];
            // get Order's data will DELETE
            $getDataOrderResult = $orderModel->getDataOrderByOrderID($orderID);
            $dataOrder = $getDataOrderResult->fetch_assoc();
            $amountOrderDelete = $dataOrder['amount'];
            // delete order
            $deleteOrderResult = $orderModel->deleteOrder($orderID);
            // update transaction's amount
            $transactionResult = $transactionModel->getDataTransactionByID($transactionID);
            $transactionData = $transactionResult->fetch_assoc();
            $oldAmountTransaction = $transactionData['amount'];
            $newAmountTransaction = $oldAmountTransaction - $amountOrderDelete;
            $transactionModel->updateAmountTransactionDEL($transactionID,$newAmountTransaction);
        }
        header("Location: index.php?controller=home&action=detailTransaction&transactionID=".$transactionID."");
    }
}
?>