<?php
/**
 * class chỉnh sửa thông tin User.
 */
class editUser
{
    public function editUser(){
        $model = new UsersModel();
        $result = $model->getDataUserByID($_GET['id']);
        $data = $result->fetch_assoc();  
        $error = array();
        if (isset($_POST['editUser'])) {
            if (empty($_POST['phone'])) {
                $error['phone'] = "Vui lòng nhập!";
            } elseif (!isPhoneNumber($_POST['phone'])) {
                $error['phone'] = "Số điện thoại không đúng định dạng!";
            } else {
                $phone = $_POST['phone'];
            }
            if (empty($_POST['address'])) {
                $error['address'] = "Vui lòng nhập!";
            } else {
                $address = $_POST['address'];
            }
            // check không có lỗi thì gọi hàm chỉnh sửa data
            if (empty($error)) {
                $update = $model->editUser($_GET['id'],$phone,$address);
                header('Location: admin.php?controller=home&action=showListUser');
            }
        }
        include_once 'views/admin/editUser.php';   
    }
}
?>