<?php

    namespace Todo\Controller;
    use Todo\Models\Todo;
    // require_once 'model/Todo.php';

    class TodoController {
        function index() {
            $todos = Todo::All();
            require __DIR__ . '../../Views/todo/index.php';
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
            require __DIR__ . '../../Views/todo/index.php';
        }
    }

?>