<?php
class AddOrder
{
    public function AddOrder(){
        $productModel = new ProductModel();
        $transactionModel = new TransactionModel();
        $orderModel = new OrderModel();
        // $result : là của productModel
        $result = $productModel->getDataByProductId($_GET['id']);
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
            $transactionResult = $transactionModel->checkIssetTransactionWithUserID($_SESSION['id']);
            if(mysqli_num_rows($transactionResult) > 0) {
                // tồn tại transaction với status = 0
                $transactionData = $transactionResult->fetch_assoc();
                $productData = $result->fetch_assoc();
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
                $message = "Đã thêm hàng vào giỏ!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                // không tồn transaction với status = 0 => tạo transaction mới
                echo 'not';exit;
            }
            /**
             * bây giờ phải từ USERID kiểm tra có transaction nào không
             * 1/nếu không thì tạo transaction và lấy ID của transaction gán vào ID_Transaction để tạo order mới
             * 2/nếu đã tồn tại transaction thì check xem trạng thái của transaction đó đã thanh toán hay chưa(0 or 1)
             *      - nếu trang thái là 0 (chưa thanh toán) thì lấy ID của transaction đó tạo new order.
             *      - nếu trạng thái là 1 (đã thanh toán) thì lại tạo transaction mới để lấy ID của transaction
             * đó tạo thêm order mới!
             */
            
            include_once 'views/web/showInforProduct.php';
        } else {
            $message = "Vui lòng đăng nhập trước khi thêm hàng vào giỏ!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
    }
}
?>