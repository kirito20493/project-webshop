<?php
class AddComment
{
    public function AddComment(){
        $commentModel = new CommentModel();
        $productModel = new ProductModel();
        if ( isset($_SESSION['email']) && isset($_SESSION['id'])){
            if (isset($_POST['content']) && isset($_GET['productID'])){
                $productID = $_GET['productID'];
                $userID = $_SESSION['id'];
                $content = $_POST['content'];
                // add new comment
                $commentAddResult = $commentModel->addComment($productID,$userID,$content);
                // lấy dữ liệu để về trang InforProduct
                $result = $productModel->getDataProductWithProductID($productID);
                $commentResult = $commentModel->getDataCommentByProductID($productID);
                include_once 'views/web/showInforProduct.php';
            } else {
                echo 'ERROR';exit;
            }
        } else {
            $message = "Vui lòng đăng nhập!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include_once 'views/web/login.php';
        }
    }
}
?>