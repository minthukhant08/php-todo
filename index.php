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

  <div class="todo-container">
    <h2>To-Do List</h2>
    <div>
      <input type="text" id="taskInput" placeholder="Add a new task...">
      <button onclick="addTask()">Add</button>
    </div>
    <ul id="taskList">
        <li>
            <span class="task done">sdf</span>
            <button class="done-btn">Done</button>
            <button class="delete-btn">Delete</button>
        </li>
    </ul>
  </div>
</body>
</html>
