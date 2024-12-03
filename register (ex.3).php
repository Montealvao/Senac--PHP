<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["input"]) && isset($_POST["input2"])){
        $name = $_POST["input"];
        $value = $_POST["input2"]; 
    }
    
    if(strlen($name) > 0 && strlen($value) > 0){
        echo "<p> Nome: $name </p>"; 
        echo "<p>E-mail: $value</p>";
        echo "SUCESSO!!!";
    }

    else{
        echo "ERRO!!!";
    }
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
    <form method="post">
        <input type="text" name="input">
        <input type="email" name="input2">
        <input type="submit">
    </form>    

</body>
</html>