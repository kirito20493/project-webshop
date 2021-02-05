<?php
class HomeController
{   
    public function handleRequestAction(){
        $action = isset($_GET['action'])?$_GET['action']:'main';
        switch ($action){
        case 'main':
            include_once 'views/web/index.php';
        }
    }   
}
?>