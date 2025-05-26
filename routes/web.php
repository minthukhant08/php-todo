<?php 
require_once 'controller/TodoController.php';

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case '/todo':
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            create();
        }else{
            index();
        }
        break;
    // case '/todo/update':
    //     update();
    //     break;
    default:
        include '404.php';
        break;
}

?>