<?php
/**
 * Class Trang LoginControler
 */
class LoginController
{
    public function Login(){
        $model = new AdminModel();
        if (isset($_POST['login'])) {
            $error = array();
            if (empty($_POST['password'])) {
                $error['password'] = 'Vui lòng nhập!';
            }
            if (empty($_POST['username'])) {
                $error['username'] = 'Vui lòng nhập!';
            } elseif ($model->checkIssetUser($_POST['username']) === TRUE) {
                $error['username'] = "Tài khoản này không tồn tại!";
            } else {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $result = $model->checkLogin($username, $password);
                $data = $result->fetch_assoc();
                if ($data['username'] == $username && $data['password'] == $password) {
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['id'] = $data['id'];
                    header('Location: admin.php?controller=home');
                } else {
                    $error['password'] = "Mật khẩu không chính xác!";
                }
            }
        }
        include_once 'views/admin/login.php';
    }
}
?>