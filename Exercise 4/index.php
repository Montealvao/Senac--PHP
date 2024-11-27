

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="input" placeholder="teste">
        <button type="submit" name="add">Adicionar</button>
        <button type="submit" name="remove">Remover</button>
        <button type="submit" name="view">Ver lista</button>
        <button type="submit" name="conclude">Concluir</button>
    </form>    

    <?php
    require "./task-manager.php";
    if($_SERVER['REQUEST_METHOD'] ==='POST'){
        if(isset($_POST['input'])){
            $name = $_POST['input'];
            if(isset($_POST["add"])){
                echo add_task($name);
            }
            
            else if(isset($_POST["remove"])){
                echo remove_task($name);

            }

            else if(isset($_POST["view"])){
                echo tasks_array();
            }
            
            // else if($_POST["conclude"]){
            //     echo task_conclude_marker();
            // }
        }
    }
    ?>

</body>
</html>