<?php
// include_once 'public/lib/validate.php';
class RegisterController
{
    public function Register(){
        $model = new AdminModel();
        if (isset($_POST['register'])) {
            $error = array();
            //validate UserName
            if (!checkEmptyUserName($_POST['username'])) {
                $error['username'] = "Bạn chưa nhập tài khoản! Vui lòng nhập!";
            }
            if(!$model->checkIssetUser($_POST['username'])) {
                $error['username'] = "Tài khoản này đã tồn tại! Vui lòng chọn tài khoản khác!";
            }
            if(!isUserName($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng!'; 
            }else{
                $username = $_POST['username'];
            }
            // Validate Password
            if (!checkEmptyPassword($_POST['password'])) {
                $error['password'] = 'bạn cần nhập password!';
            } 
            if(!isPassWord($_POST['password'])) {
                $error['password'] = 'PassWord phải gôm chữ + số và không có ký tự trống!'; 
            }else{
                $password = $_POST['password'];
            }
            // validate Password-confirmation
            if (empty($_POST['password_confirmation'])) {
                $error['password_confirmation'] = 'bạn cần nhập password-congirmation ';
            } else {
                if ($_POST['password_confirmation'] != $_POST['password']) {
                    $error['password_confirmation'] = 'Mật khẩu nhập lại không chính xác! Vui lòng nhập lại!';
                } else {
                    $password_confirmation = $_POST['password_confirmation'];
                }
            }
            //validate name
            if (empty($_POST['name'])) {
                $error['name'] = "bạn cần nhập tên!";
            } else {
                $name = $_POST['name'];
            }
            //check có tồn tại LỖI hay không?
            if(empty($error)) {
                $result = $model->addUserAdmin($username, $password, $name);
                if($result === true) {
                    header('Location: admin.php?controller=login');
                }   
            } else {
                // header('Location: admin.php?controller=register#signup');
            }
        }
        include_once 'views/admin/register.php';
    }
}
?>