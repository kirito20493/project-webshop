<?php
class Controller{
    public function handleRequest(){
        $controller = isset($_GET['controller'])?$_GET['controller']:'home';
        switch ($controller) {
            case 'home':
                include_once 'controllers/webController/HomeController.php';
                $homeAction = new HomeController();
                $homeAction->handleRequestAction();
                break;
        }
    }
}
?>