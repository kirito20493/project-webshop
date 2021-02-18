<?php
include_once './config/DBconnect.php';
class OrderModel extends DBConnect
{   
    // lấy tất cả cơ sở dữ liệu của ORDER TABLE
    public function getAllDataOrder(){
        $sql = "SELECT * FROM order";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Lấy giá trị cho form SHOW LIST ORDER
    public function getDataOrderShowList(){
        $sql = "SELECT order.id, order.product_id, order.user_id, order.qty,
         order.amount, order.status, order.created, user.email, product.name, product.price 
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

    //add new order
    //INSERT INTO order(product_id, qty, amount, status, user_id) VALUES ('20','2','2600','1','24')
}