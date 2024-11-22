
<?php

function addition($a,$b){
    return $a + $b;
}

function subtraction($a,$b){
    return $a - $b;
}

function multiplication($a,$b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}

if($_POST['input'] && $_POST['input2'] && $_POST['options']) {
    if($_POST["options"] == "+"){
        echo "Resultado: ";
        echo addition($_POST["input"], $_POST["input2"]);
    }
    else if($_POST["options"] == "-"){
        echo "Resultado: ";
        echo  subtraction($_POST["input"], $_POST["input2"]);
    }
    else if($_POST["options"] == "*"){
        echo "Resultado: ";
        echo multiplication( $_POST["input"] ,$_POST["input2"]);
    }
    else if($_POST["options"] == "/"){
        echo "Resultado: ";
        echo division($_POST["input"], $_POST["input2"]) ;
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
        <input type="text" name="input2">
        <input type="submit">
        <select name="options">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select>
    </form>    

</body>
</html>
