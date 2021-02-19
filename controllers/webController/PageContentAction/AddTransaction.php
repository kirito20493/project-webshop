<?php
class AddTransaction
{
    public function AddTransaction(){
        $transactionModel = new TransactionModel();
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
            $userID = $_SESSION['id'];
            $userEmail = $_SESSION['email'];
            $result = $transactionModel->addTransaction($userID,$userEmail);
            include_once 'views/web/emptyTransaction.php';
        } else {
            $message = "Vui lòng đăng nhập!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
    }
}
?>