<?php 

use Todo\Controller\TodoController;

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case '/todo':
        $todoController = new TodoController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $todoController->create();
        }else{
            $todoController->index();
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