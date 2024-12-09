<?php
    session_start();
    if (!isset($_SESSION["user_id"])){
        header("location: ../../index.php");
    }

    include  __DIR__ . "/../../backend/controller/userController.php";
    $userController = new UserController();

    $user = [
        'id' => "",
        'name' => "",
        'password' => ""
    ];

    $action = "signUp";
    $buttonTitle = "Cadastrar";
    if (isset($_GET["id"])){
        $action = "edit";
        $buttonTitle = "Editar";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="../../backend/router/userRouter.php?action=<?php echo $action ?>" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
        <input type="text" name="name" placeholder="Nome de usuário" value="<?php echo $user['name']?>">
        <input type="password" name="password" placeholder="Senha" value="<?php echo $user['password']?>">
        <button type="submit"><?php echo $buttonTitle ?></button>
    </form>

</body>
</html>