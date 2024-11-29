

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form method="post">
        <h1>Tarefas</h1>
        <input type="text" name="input" placeholder="teste">
        <button type="submit" name="add">Adicionar Tarefa</button>
        <button type="submit" name="remove">Remover Tarefa</button>
        <button type="submit" name="view">Ver lista</button>
        <button type="submit" name="conclude">Concluir Tarefa</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    
                </td>
            </tr>
        </tbody>
    </table>    

    <?php
    require "./task-manager.php";
    if($_SERVER['REQUEST_METHOD'] ==='POST'){
        if(isset($_POST['input'])){
            $name = $_POST['input'];
            if(isset($_POST["add"])){
                if(($name != "")){
                    echo add_task($name);
            }
            }
            
            else if(isset($_POST["remove"])){
                echo remove_task($name);

            }

            else if(isset($_POST["view"])){
                echo tasks_array();
            }
            
            else if(isset($_POST["conclude"])){
                echo task_conclude_marker($name);
            }
        }
    }
    ?>

</body>
</html>