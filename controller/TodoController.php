<?php 
    require_once 'model/Todo.php';

    function index() {
        $todos = Todo::All();
        require_once 'views/todo/index.php';
    }

    function create() {
        //validation
        //get data
        $name = $_POST["task"];
        $status = False;
        $todo = new Todo($name, $status);
        //save
        $todo->save();
        //get all
        $todos = Todo::All();
        require_once 'views/todo/index.php';
    }

?>