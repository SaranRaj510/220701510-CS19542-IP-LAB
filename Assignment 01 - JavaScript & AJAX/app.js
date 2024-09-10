document.addEventListener('DOMContentLoaded', function () {
    const taskForm = document.getElementById('task-form');
    const taskList = document.getElementById('task-list');
    const feedbackMessage = document.getElementById('feedback-message');
    const allTasksButton = document.getElementById('all-tasks');
    const pendingTasksButton = document.getElementById('pending-tasks');
    const completedTasksButton = document.getElementById('completed-tasks');
    
    // Array to store tasks
    let tasks = [];

    // Handle form submission
    taskForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const title = document.getElementById('task-title').value;
        const description = document.getElementById('task-desc').value;
        const dueDate = document.getElementById('due-date').value;

        if (title && description && dueDate) {
            addTask(title, description, dueDate);
            taskForm.reset();
            showFeedback('Task added successfully!', 'success');
        } else {
            showFeedback('Please fill in all fields.', 'error');
        }
    });

    // Add Task
    function addTask(title, description, dueDate) {
        const task = {
            id: Date.now(),
            title: title,
            description: description,
            dueDate: dueDate,
            completed: false
        };
        
        tasks.push(task);
        renderTasks();
    }

    // Render Tasks
    function renderTasks(filter = 'all') {
        taskList.innerHTML = '';

        const filteredTasks = tasks.filter(task => {
            if (filter === 'pending') return !task.completed;
            if (filter === 'completed') return task.completed;
            return true; // 'all' filter
        });

        filteredTasks.forEach(task => {
            const taskItem = document.createElement('li');
            taskItem.className = 'task-item';
            taskItem.dataset.id = task.id;

            taskItem.innerHTML = `
                <div>
                    <input type="checkbox" class="task-status" ${task.completed ? 'checked' : ''}>
                    <span class="task-title">${task.title}</span>
                    <p>${task.description}</p>
                    <small>Due: ${task.dueDate}</small>
                </div>
                <div>
                    <button class="edit-task">Edit</button>
                    <button class="delete-task">Delete</button>
                </div>
            `;

            if (task.completed) {
                taskItem.classList.add('completed');
            }

            taskList.appendChild(taskItem);
            bindTaskActions(taskItem);
        });
    }

    // Bind Task Actions
    function bindTaskActions(taskItem) {
        const checkbox = taskItem.querySelector('.task-status');
        const deleteButton = taskItem.querySelector('.delete-task');
        const editButton = taskItem.querySelector('.edit-task');

        checkbox.addEventListener('change', function () {
            const taskId = taskItem.dataset.id;
            toggleTaskStatus(taskId, checkbox.checked);
        });

        deleteButton.addEventListener('click', function () {
            const taskId = taskItem.dataset.id;
            deleteTask(taskId);
        });

        editButton.addEventListener('click', function () {
            const taskId = taskItem.dataset.id;
            editTask(taskId);
        });
    }

    // Toggle Task Status
    function toggleTaskStatus(taskId, completed) {
        const task = tasks.find(task => task.id == taskId);
        if (task) {
            task.completed = completed;
            renderTasks();
            showFeedback('Task updated successfully!', 'success');
        }
    }

    // Delete Task
    function deleteTask(taskId) {
        tasks = tasks.filter(task => task.id != taskId);
        renderTasks();
        showFeedback('Task deleted successfully!', 'success');
    }

    // Edit Task
    function editTask(taskId) {
        const task = tasks.find(task => task.id == taskId);
        if (task) {
            document.getElementById('task-title').value = task.title;
            document.getElementById('task-desc').value = task.description;
            document.getElementById('due-date').value = task.dueDate;

            tasks = tasks.filter(t => t.id != taskId);
            renderTasks();
            showFeedback('Edit the task details and submit.', 'info');
        }
    }

    // Show Feedback Message
    function showFeedback(message, type) {
        feedbackMessage.innerText = message;
        feedbackMessage.className = type;
        setTimeout(() => {
            feedbackMessage.innerText = '';
            feedbackMessage.className = '';
        }, 3000);
    }

    // Filter Tasks
    allTasksButton.addEventListener('click', function () {
        renderTasks('all');
    });

    pendingTasksButton.addEventListener('click', function () {
        renderTasks('pending');
    });

    completedTasksButton.addEventListener('click', function () {
        renderTasks('completed');
    });

    // Initial render
    renderTasks();
});
