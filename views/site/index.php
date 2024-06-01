<?php

/** @var yii\web\View $this */

$this->title = 'My ToDos';
?>
<div class="bg-white p-5 rounded-lg shadow w-100" style="max-width: 600px;">
    <h1 class="text-center mb-4">To-Do List</h1>
    <form id="todo-form" class="form-inline mb-3">
        <input id="todo-input" type="text" class="form-control flex-grow-1 mr-2" placeholder="Add a new task" required>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <ul id="todo-list" class="list-group">
        <!-- To-Do items will be appended here -->
    </ul>
</div>

<script>
    document.getElementById('todo-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const input = document.getElementById('todo-input');
        const newTodoText = input.value.trim();
        if (newTodoText !== "") {
            const li = document.createElement('li');
            li.className = "list-group-item d-flex justify-content-between align-items-center";
            li.innerHTML = `
                <span>${newTodoText}</span>
                <button class="btn btn-danger btn-sm">Delete</button>
            `;
            document.getElementById('todo-list').appendChild(li);
            input.value = '';
        }
    });

    document.getElementById('todo-list').addEventListener('click', function(event) {
        if (event.target.tagName === 'BUTTON') {
            const li = event.target.parentElement;
            li.remove();
        }
    });
</script>
