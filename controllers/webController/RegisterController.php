<?php
class RegisterController{
    public function RegisterController(){
        $model = new UsersModel();
        if (isset($_POST['register'])){
            $error = array();
            // check validate password
            if (empty($_POST['password'])) {
                $error['password'] = 'Vui lòng nhập!';
            } elseif (isEmail($_POST['email']) == FALSE){
                $error['password'] = 'Email không đúng định dạng!';
            } else {
                $password = md5($_POST['password']);
            }
            // check validate password_confirmation
            if (empty($_POST['password_confirmation'])) {
                $error['password_confirmation'] = 'Vui lòng nhập!';
            } elseif ($_POST['password_confirmation'] != $_POST['password']){
                $error['password_confirmation'] = 'mật khẩu nhập lại không chính xác!';
            }
            // check validate phone number
            if (empty($_POST['phonenumber'])) {
                $error['phonenumber'] = 'Không được để trống!';
            } elseif (isPhoneNumber($_POST['phonenumber']) == FALSE) {
                $error['phonenumber'] = "Số điện thoại không hợp lệ!";
            } else {
                $phonenumber = $_POST['phonenumber'];
            }
            // check validate address
            if (empty($_POST['address'])) {
                $error['address'] = 'Vui lòng nhập địa chỉ!';
            } else {
                $address = $_POST['address'];
            }
            // check validate email
            if (empty($_POST['email'])) {
                $error['email'] = 'Vui lòng nhập!';
            } elseif ($model->checkIssetEmail($_POST['email']) === FALSE) {
                $error['email'] = "Email này đã được đăng ký!";
            } else {
                $email = $_POST['email'];
            }
            
            // kiểm tra không có lỗi validation thì add user
            if (empty($error)){
                $result = $model->creatUser($email,$phonenumber,$address,$password);
                $message = "Đã đăng ký tài khoản thành công!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                include_once 'views/web/login.php';
            }
        }
        include_once 'views/web/register.php';
    }
}
?>