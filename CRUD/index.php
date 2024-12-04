<?php
    $error = false;
    if(isset($_GET["error"])){
        $error = true;
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
    <?php
        if($error){
            echo "<p style='color: red;'>Erro ao tentar fazer login. Tente novamente.</p>";
        }
    ?>
    <form action="./backend/router/loginRouter.php?action=LoginAuthentication" method="POST">
        <input type="text" name="name">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>

</body>
</html>