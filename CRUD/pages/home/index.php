<?php
    session_start();
    if (!isset($_SESSION["user_id"])){
        header("location: ../../index.php");
    }

    include  __DIR__ . "/../../backend/controller/userController.php";
    $userController = new UserController();
    $users = $userController->getAlluser();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuários</h1>
    <a href="../signUp/index.php"><button>Cadastrar</button></a>
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Senha</td>
            </tr>
        </thead>
        <tbody>
           <?php 
            foreach ($users as $item){
           ?>
           <tr>
                <td><?php echo $item["id"]?></td>
                <td><?php echo $item["name"]?></td>
                <td><?php echo $item["password"]?></td>
           <?php
            }
           ?>
        </tbody>
    </table>
</body>
</html>