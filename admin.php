<?php
ob_start();
session_start();
include_once 'public/lib/validate.php';
include_once 'controllers/adminController/AdminController.php';
$controller = new AdminController();
$controller->handleRequest();
?>