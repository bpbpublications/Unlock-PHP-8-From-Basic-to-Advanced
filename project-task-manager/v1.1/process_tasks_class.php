<?php
include_once 'config_global.php';

/**
 * Add task in task list
 *
 * @param string $task task to be added
 * @return void
 */
function addTask(string $task): void
{
    $tasks = $_SESSION['tasks'] ?? array();
    $tasks[] = [
        'task' => ucfirst($task),
        'completed' => false,
    ];
    $_SESSION['tasks'] = $tasks;
}

/**
 * Mark a task as completed based on the
 * array index
 *
 * @param integer $index
 * @return void
 */
function markTaskAsCompleted(int $index): void
{
    $tasks = $_SESSION['tasks'];
    if (isset($tasks[$index])) {
        $tasks[$index]['completed'] = true;
        $_SESSION['tasks'] = $tasks;
    }
}

/**
 * Delete a record by index
 *
 * @param integer $index
 * @return void
 */
function deleteTaskByIndex(int $index): void
{
    $tasks = $_SESSION['tasks'];
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        $_SESSION['tasks'] = $tasks;
    }
}

/**
 * Clear all tasks
 *
 * @return void
 */
function clearAllTasks(): void
{
    //unset = destroys the specified variable/value
    unset($_SESSION['tasks']);
}