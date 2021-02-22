<?php
class SortTimeOrder
{
    public function SortTimeOrder(){
        $productModel = new ProductModel();
        $orderModel = new OrderModel();
        $result = $productModel->SortProductByTimeOrder();
        include_once 'views/web/sortTimeOrder.php';
    }
}
?>