<?php namespace TaskManager\Models;

class Task {
    public function createTask(array $data): void{
        $tasks = $this->tasks;
        $tasks[] = $data;
        $_SESSION['tasks'] = $tasks;
    }

    public function markTaskAsCompleted(int $index): void
    {
        $tasks = $this->tasks;
        if (isset($tasks[$index])) {
            $tasks[$index]['completed'] = true;
            $_SESSION['tasks'] = $tasks;
        }
    }

    public function deleteTaskByIndex(int $index): void
    {
        $tasks = $_SESSION['tasks'];
        if (isset($tasks[$index])) {
            unset($tasks[$index]);
            $_SESSION['tasks'] = $tasks;
        }
    }

    public function clearAllTasks(): void
    {
        //unset = destroys the specified variable/value
        unset($_SESSION['tasks']);
    }

    public function __get(string $property) {
        if($property === 'tasks') {
            return $_SESSION[$property] ?? [];
        }
        throw new \Exception('Property does not exist');
    }
}