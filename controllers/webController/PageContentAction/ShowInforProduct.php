<?php
class ShowInforProduct
{
    public function ShowInforProduct(){
        $productModel = new ProductModel();
        $commentModel = new CommentModel();
        if (isset($_GET['id'])){
            $productID = $_GET['id'];
            $result = $productModel->getDataProductWithProductID($productID);
        }
        $commentResult = $commentModel->getDataCommentByProductID($productID);
        
        include_once 'views/web/showInforProduct.php';
    }
}
?>