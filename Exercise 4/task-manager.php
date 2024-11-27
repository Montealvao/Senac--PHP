<?php

session_start();
if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = [];
}

function add_task($name){
    $P = "Pendente";
    array_push($_SESSION['tasks'], "$name - $P");
}

function remove_task($name){
    foreach($_SESSION['tasks'] as $key=>$array){
        if($array == $name){
            unset($_SESSION['tasks'][$key]);
        }
    }
}

function tasks_array(){
    foreach($_SESSION['tasks'] as $array){
        echo "<li>$array</li>";
    }
}

function task_conclude_marker($name){
    foreach($_SESSION["tasks"] as $array){
      if($array ==$name) {
        
      }
    }
}
?>