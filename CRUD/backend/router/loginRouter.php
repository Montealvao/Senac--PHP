<?php

include __DIR__ . "/../controller/loginController.php";

$loginController = new LoginController();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    switch ($_GET["action"]) {
        case 'LoginAuthentication':
            $result = $loginController->CheckLogin($_POST["name"],$_POST["password"]);
            
            $result? header("Location: ../../pages/home/index.php") : header("Location: ../../index.php?error=true");
            
        default:
            echo 'Não achei';
            break;
    }
}