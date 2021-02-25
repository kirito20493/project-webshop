<?php
class AddOrder
{
    public function AddOrder(){
        $productModel = new ProductModel();
        $transactionModel = new TransactionModel();
        $orderModel = new OrderModel();
        // $result : là của productModel
        $productResult = $productModel->getDataByProductId($_GET['id']);
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
            $transactionCheckResult = $transactionModel->checkIssetTransactionWithUserID($_SESSION['id']);
            if(mysqli_num_rows($transactionCheckResult) > 0) {
                // tồn tại transaction với status = 0
                $transactionData = $transactionCheckResult->fetch_assoc();
                $productData = $productResult->fetch_assoc();
                // lấy các giá trị cần để tạo mới order
                $productPrice = $productData['price'];
                $productID = $_GET['id'];
                $transactionID = $transactionData['id'];
                $userID = $_SESSION['id'];
                // echo $productPrice,$productID,$transactionID,$userID;exit;
                // creat new Order
                $transactionAmout = $transactionData['amount'] + $productPrice;
                $orderResult = $orderModel->addOrderWithTransactionID($transactionID,$productID,$productPrice,$userID);
                //update transaction's amount 
                $transactionModel->updateAmountTransaction($transactionID,$transactionAmout);
                
                //header("Location: index.php?controller=home&action=detailTransaction&transactionID=".$transactionID."");
                header("Location: index.php?controller=home&action=detailTransaction");
            } else {
                // không tồn transaction với status = 0 => tạo transaction mới
                $userID = $_SESSION['id'];
                $userEmail = $_SESSION['email'];
                $transactionAddResult = $transactionModel->addTransaction($userID,$userEmail);
                // add new order
                $transactionCheckResult = $transactionModel->checkIssetTransactionWithUserID($_SESSION['id']);
                $transactionData = $transactionCheckResult->fetch_assoc();
                $productData = $productResult->fetch_assoc();
                // lấy các giá trị cần để tạo mới order
                $productPrice = $productData['price'];
                $productID = $_GET['id'];
                $transactionID = $transactionData['id'];
                $userID = $_SESSION['id'];
                // echo $productPrice,$productID,$transactionID,$userID;exit;
                // creat new Order
                $transactionAmout = $transactionData['amount'] + $productPrice;
                $orderResult = $orderModel->addOrderWithTransactionID($transactionID,$productID,$productPrice,$userID);
                //update transaction's amount 
                $transactionModel->updateAmountTransaction($transactionID,$transactionAmout);
                
                //header("Location: index.php?controller=home&action=detailTransaction&transactionID=".$transactionID."");
                header("Location: index.php?controller=home&action=detailTransaction");
            }
        } else {
            $message = "Vui lòng đăng nhập trước khi thêm hàng vào giỏ!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
    }
}
?>