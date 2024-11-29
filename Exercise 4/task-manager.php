<?php

session_start();
if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = [];
}

function add_task($name){
    $task = [
        'name'=> $name,
        'Status'=> false
    ];
    array_push($_SESSION['tasks'], $task );
}

function remove_task($name){
    foreach($_SESSION['tasks'] as $key=>$item){
        if($item['name'] == $name){
            unset($_SESSION['tasks'][$key]);
        }
    }
}

function tasks_array(){
    foreach($_SESSION['tasks'] as $item){
            $status = $item['Status'] ? 'Completado' : 'Pendente';

            echo "
                <div style='display: flex; gap: 1rem;'>
                    <li>{$item['name']}</li>
                    <span>{$status}</span>
                </div>
            ";
        }
    }

function task_conclude_marker($name){
    foreach($_SESSION['tasks'] as &$item){
        if($item['name'] == $name){
            $item['Status'] = true;
        }
    }
}
?>