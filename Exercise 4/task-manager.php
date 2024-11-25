<?php

$tasks = [];

function add_task($name){
    array_push($tasks, $name);
    echo "Adicionado com sucesso";
}

function remove_task($name){
    unset($tasks[$name]);
    echo "Removido com sucesso";
}

function tasks_array(){


}

function task_conclude_marker(){
    
}
?>