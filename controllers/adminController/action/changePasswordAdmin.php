<?php
class changePasswordAdmin {
    public function changePasswordAdmin(){
        $model = new AdminModel();
        $username = $_SESSION['username'];
        if (isset($_POST['changePAD'])) {
            $error = array();

            if (empty($_POST['passwordOld']) || empty($_POST['password']) || empty($_POST['password_confirmation'])) {
                $error['password_confirmation'] = "Vui lòng nhập tất cả các trường trên!";
            } else {
                $result = $model->getDataByUsername($username);
                $data = $result->fetch_assoc();
                $passwordOld = md5($_POST['passwordOld']);
                if ($passwordOld != $data['password']) {
                    $error['passwordOld'] = "Mật khẩu không chính xác!";
                }
                if(!isPassWord($_POST['password'])) {
                    $error['password'] = 'PassWord phải gôm chữ + số và không có ký tự trống!'; 
                }else{
                    $password = md5($_POST['password']);
                }
                // validate Password-confirmation
                if ($_POST['password_confirmation'] != $_POST['password']) {
                    $error['password_confirmation'] = 'Mật khẩu nhập lại không chính xác! Vui lòng nhập lại!';
                } else {
                    $password_confirmation = $_POST['password_confirmation'];
                }
            }
            //check có tồn tại LỖI hay không?
            if(empty($error)) {
                $resultChange = $model->changePassword($data['id'], $password);
                if($resultChange === true) {
                    header('Location: admin.php?controller=home&action=main');
                }   
            }
        }
        include_once 'views/admin/changePasswordAdmin.php';
    }
}
?>