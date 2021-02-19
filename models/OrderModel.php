<?php
include_once './config/DBconnect.php';
class OrderModel extends DBConnect
{   
    // lấy tất cả cơ sở dữ liệu của ORDER TABLE
    public function getAllDataOrder(){
        $sql = "SELECT * FROM order";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }// lấy tất cả cơ sở dữ liệu của ORDER TABLE
    public function getDataOrderByOrderID($id){
        $sql = "SELECT * FROM `order` WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Lấy giá trị cho form SHOW LIST ORDER
    public function getDataOrderShowList(){
        $sql = "SELECT order.id, order.product_id, order.user_id, order.qty,
         order.amount, order.created, user.email, product.name, product.price 
         FROM `order` INNER JOIN `user` ON order.user_id = user.id INNER JOIN `product` 
         ON order.product_id = product.id ORDER BY order.created";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Xoá đơn hàng
    public function deleteOrder($id){
        $sql = "DELETE FROM `order` WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // getData order by transactionID
    public function getDataByTransactionID($transactionID){
        $sql = "SELECT order.id, order.product_id, order.user_id, order.qty,
        order.amount,order.transaction_id, order.created, user.email,product.image_link, product.content, product.name, product.price 
        FROM `order` INNER JOIN `user` ON order.user_id = user.id INNER JOIN `product` 
        ON order.product_id = product.id WHERE order.transaction_id = '$transactionID' ORDER BY order.created ";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // add new Order
    public function addOrderWithTransactionID($transactionID,$productID,$price,$userID){
        $sql = "INSERT INTO `order`(`transaction_id`, `product_id`, `qty`, `amount`, `user_id`, `created`) 
        VALUES ('$transactionID','$productID','1','$price','$userID',CURRENT_TIMESTAMP())";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}