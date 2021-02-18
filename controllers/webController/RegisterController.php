<?php
class RegisterController{
    public function RegisterController(){
        $model = new UsersModel();
        include_once 'views/web/register.php';
    }
}
?>