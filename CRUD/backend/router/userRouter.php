<?php

include __DIR__ . "/../controller/userController.php";

$userController = new userController();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    switch ($_GET["action"]) {
        case 'signUp':
            if(!(empty($_POST['name']) || empty($_POST['password']))){

                $result = $userController->CreateUser($_POST["name"],$_POST["password"]);
                if($result){
                    header("location: ../../pages/home/index.php");
                }else{
                    header("location: ../../pages/signUp/index.php?error=true");
                }
            }else{
                header("location: ../../pages/signUp/index.php?error=true");
            }
            break;
        
        case "edit":
            if(!(empty($_POST['name']) || empty($_POST['password']))){
                $result = $userController->UserUpdate($_POST['user_id'], $_POST["name"],$_POST["password"]);
                if($result){
                    header("location: ../../pages/home/index.php");
                }else{
                    header("location: ../../pages/signUp/index.php?error=true");
                }
            }else{
                header("location: ../../pages/signUp/index.php?error=true");
            }
            break;
        
        case "delete":
            $result = $userController->deleteUser($_POST["user_id"]);
            if($result){
                header("location: ../../pages/home/index.php");
            }else{
                header("location: ../../pages/home/index.php?error=true");
            }
            break;


            default:
            echo 'Não achei';
            break;
    }
}