<?php

try{
    $bd = new mysqli('localhost', 'root', '', 'carolina');
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}

/*
    if($bd->ping()){
        echo 'todo bien';
    }else{
        echo 'error';
    }
*/