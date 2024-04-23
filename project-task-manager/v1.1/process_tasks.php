<?php
include_once 'process_tasks_class.php';

if (isset($_POST['task']) && !empty($_POST['task'])) {
   addTask(task: $_POST['task']);
}

if (isset($_POST['clear'])) {
    clearAllTasks();
}

if (isset($_POST['completed']) && isset($_POST['index'])) {
    markTaskAsCompleted(index: $_POST['index']);
}

if (isset($_POST['delete']) && isset($_POST['index'])) {
    deleteTaskByIndex(index: $_POST['index']);
}