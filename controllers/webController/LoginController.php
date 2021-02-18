<?php
class LoginController {
    public function LoginController(){
        $model = new UsersModel();
        if (isset($_POST['login'])) {
            $error = array();
            if (empty($_POST['password'])) {
                $error['password'] = 'Vui lòng nhập!';
            }
            if (empty($_POST['email'])) {
                $error['email'] = 'Vui lòng nhập!';
            } elseif ($model->checkIssetEmail($_POST['email']) === TRUE) {
                $error['email'] = "Email này chưa được đăng ký!";
            } else {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $result = $model->checkLoginUser($email, $password);
                $data = $result->fetch_assoc();
                if ($data['email'] == $email && $data['password'] == $password) {
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['id'] = $data['id'];
                    header('Location: index.php?controller=home');
                } else {
                    $error['password'] = "Mật khẩu không chính xác!";
                }
            }
        }
        include_once 'views/web/login.php';
    }
}
?>