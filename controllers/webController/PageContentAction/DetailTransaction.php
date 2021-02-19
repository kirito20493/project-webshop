<?php
class DetailTransaction
{
    public function DetailTransaction(){
        $orderModel = new OrderModel();
        $transactionModel = new TransactionModel();
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
            $transactionResult = $transactionModel->checkIssetTransactionWithUserID($_SESSION['id']);
            if(mysqli_num_rows($transactionResult) > 0) { 
                $transactionData = $transactionResult->fetch_assoc();
                $transactionID = $transactionData['id'];
                $result = $orderModel->getDataByTransactionID($transactionID);
                if (mysqli_num_rows($result) > 0) {
                    include_once 'views/web/detailTransaction.php';
                } else {
                    include_once 'views/web/emptyTransaction.php';
                }
            } else {
                header('Location: index.php?controller=home&action=addTransaction');
            }
        } else {
            $message = "Vui lòng đăng nhập!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
    }
}
?>