<?php
include_once './models/AdminModel.php';
include_once './models/UsersModel.php';
/**
 * Class điều hướng Controller nhánh Admin
 * 
 **/
class AdminController{
    public function handleRequest(){
        $controller = isset($_GET['controller'])?$_GET['controller']:'login';
        switch ($controller) {
            // Trang login Admin
            case 'login':
                include_once 'controllers/adminController/LoginController.php';
                $loginController = new LoginController();
                $loginController->Login();
                break;
            // Trang đăng ký tài khoản mới AdminUser
            case 'register':
                include_once 'controllers/adminController/RegisterController.php';
                $registerController = new RegisterController();
                $registerController->Register();
                break;
            // Login trang Home sau khi đã đăng nhập thành công!!
            // có thể load nếu kiểm tra có session tồn tại!
            case 'home':
                include_once 'controllers/adminController/HomeController.php';
                $homeController = new HomeController();
                $homeController->HomeController();
                break;
        }
    }
}
?>