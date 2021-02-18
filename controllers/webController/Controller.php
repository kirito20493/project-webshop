<?php
include_once './models/UsersModel.php';
include_once './views/web/header.php';
class Controller{
    public function handleRequest(){
        $controller = isset($_GET['controller'])?$_GET['controller']:'home';
        switch ($controller) {
            case 'home':
                include_once 'controllers/webController/HomeController.php';
                $homeController = new HomeController();
                $homeController->handleRequestAction();
                break;
            case 'login':
                include_once 'controllers/webController/LoginController.php';
                $loginController = new LoginController();
                break;
            case 'register':
                include_once 'controllers/webController/RegisterController.php';
                $registerController = new RegisterController();
                break;
        }
    }
}
?>