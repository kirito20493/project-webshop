<?php
class showListOrder
{
    public function showListOrder(){
        $orderModel = new OrderModel();
        $result = $orderModel->getDataOrderShowList();
        include_once 'views/admin/showListOrder.php';
    }
}
?>