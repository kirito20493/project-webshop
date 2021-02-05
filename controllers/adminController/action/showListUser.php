<?php
/**
 * Class Action -> Hiển thị danh sách User khách hàng
 */
class showListUser
{
    public function showListUser(){
        $model = new UsersModel();
        $result = $model->getDataUser();
        // $data = $result->fetch_assoc();
        include_once 'views/admin/showListUser.php';
    }
}
?>