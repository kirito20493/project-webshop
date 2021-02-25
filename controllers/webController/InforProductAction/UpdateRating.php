<?php
class UpdateRating
{
    public function UpdateRating(){
        $productModel = new ProductModel();
        $commentModel = new CommentModel();
        if (isset($_SESSION['id']) && isset($_SESSION['email'])){
            if (isset($_GET['productID']) && isset($_GET['rating']) && isset($_GET['timerating'])){
                $productID = $_GET['productID'];
                $rating = $_GET['rating'];
                $timerating = $_GET['timerating'] + 1;
                $star = $rating/$timerating;
                $productModel->updateRatingProduct($productID,$star,$rating,$timerating);

                $message = "Cảm ơn bạn đã đánh giá!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $message = "Vui lòng đăng nhập trước khi thêm hàng vào giỏ!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
        $result = $productModel->getDataProductWithProductID($productID);
        $commentResult = $commentModel->getDataCommentByProductID($productID);
        include_once 'views/web/showInforProduct.php';
    }
}
?>