<?php
ob_start();
session_start();
include_once 'public/lib/validate.php';
include_once 'controllers/webController/Controller.php';
$controller = new Controller();
$controller->handleRequest();
?>