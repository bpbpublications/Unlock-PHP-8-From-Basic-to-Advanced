<?php namespace TaskManager\Controllers;

use Exception;
use TaskManager\Models\Task;
use TaskManager\System\Controller;
use TaskManager\System\Redirect;

class Tasks extends Controller{
    public Task $taskModel;

    public function __construct()
    {
        parent::__construct();
        $this->taskModel = new Task;
    }

    public function index(array $data = [], string $layout = null): string|false {
        return parent::index([
            'tasks' => $this->taskModel->tasks
        ]);
    }

    public function onCreateTask(): void{
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        try {
            $payload = [
                'task' => ucfirst($_POST['task']),
                'completed' => false,
            ];

            $this->taskModel->createTask($payload);

            Redirect::to('/tasks', [
                'success' => 'Successfully created'
            ]);
        } catch (\Throwable $th) {
            Redirect::to('/tasks', [
                'error' => $th->getMessage(),
            ]);
        }
    }

    public function onActionTask(): void{
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        try {
            if(!method_exists($this->taskModel, $_POST['action'])){
                throw new Exception('Method does not exist in the Tasks model');
            }

            $this->taskModel->{$_POST['action']}($_POST['index']);

            Redirect::to('/tasks', [
                'success' => 'Task updated successfully'
            ]);
        } catch (\Throwable $th) {
            Redirect::to('/tasks', [
                'error' => $th->getMessage(),
            ]);
        }
    }

    public function onDeleteAll(): void{
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        try {
            $this->taskModel->clearAllTasks();

            Redirect::to('/tasks', [
                'success' => 'All records deleted successfully'
            ]);
        } catch (\Throwable $th) {
            Redirect::to('/tasks', [
                'error' => $th->getMessage(),
            ]);
        }
    }
}