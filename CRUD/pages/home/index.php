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
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
           <?php 
            foreach ($users as $item){
                echo "
                    <tr>
                        <td>{$item['id']}</td>
                        <td>{$item['name']}</td>
                        <td>{$item['password']}</td>
                        <td><a href='../signUp/index.php?id={$item['id']}'><button>Editar</button></a>
                        <form action='../../backend/router/userRouter.php?action=delete' method='post'>
                        <input type='hidden' name='user_id' value='{$item['id']}'>
                        <button type='submit' name='delete'>Deletar</button></form>
                        </td>                    
                    </tr>
                ";
            }


            ?>
        </tbody>
    </table>
</body>
</html>