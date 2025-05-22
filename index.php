<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple To-Do App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 2rem;
    }

    .todo-container {
      background: #fff;
      padding: 2rem;
      max-width: 400px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
    }

    input[type="text"] {
      width: 80%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      margin-left: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #218838;
    }

    ul {
      list-style: none;
      padding: 0;
      margin-top: 20px;
    }

    li {
      padding: 10px;
      border-bottom: 1px solid #eee;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    li.completed span {
      text-decoration: line-through;
      color: #777;
    }

    .delete-btn {
      background: #dc3545;
    }

    .delete-btn:hover {
      background: #c82333;
    }

    .done-btn {
      background:rgb(48, 163, 16);
    }

    .task {
      flex-grow: 1;
      cursor: pointer;
    }

    .done {
        text-decoration: line-through;
    }
  </style>
</head>
<body>
  <?php 
    require_once 'db.php';
    $db = new DB();
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
      $task = $_POST["task"];
      $now = date("Y-m-d H:i:s",time());
      $sql = "INSERT INTO todo (name, status, created_at, updated_at) VALUES ('$task', False, '$now', '$now')";
     
      $db->update($sql);
    }
    $tasks = $db->select("SELECT * FROM todo ORDER BY created_at Desc");

    
  ?>
  <div class="todo-container">
    <h2>To-Do List</h2>
    <form action="/" method="POST">
      <input type="text" name="task" placeholder="Add a new task...">
      <button type="sumbit">Add</button>
    </form>
    <ul id="taskList">
        <?php foreach ($tasks as $task): ?>
          <li>
            <span class="task <?= $task['status'] == 1 ? "done" : ""  ?>"><?= $task['name'] ?></span>
            <button class="done-btn">Done</button>
            <button class="delete-btn">Delete</button>
           </li>
        <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
