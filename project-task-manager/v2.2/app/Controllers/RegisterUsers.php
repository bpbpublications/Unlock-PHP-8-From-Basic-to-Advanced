<?php namespace TaskManager\Controllers;

use TaskManager\Models\User;
use TaskManager\System\Controller;
use TaskManager\System\Redirect;
use TaskManager\System\Response;
use TaskManager\System\Route;

class RegisterUsers extends Controller {
    private object $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new User;
    }

    #[Route('/api/v1/users', 'POST')]
    public function onCreateUser(): ?string {
        try {
            $this->validateFieldRequired();
            $payload = $this->mappingToSave();
            $this->userModel->create($payload);

            return $this->responseJson([
                'message' => 'Successful registration'
            ]);
        } catch (\Throwable $th) {
            return $this->responseJson(
                data: [
                        'error' => $th->getMessage(),
                ],
                statusCode: 401
            );
        }
    }

    private function validateFieldRequired(): void {
        $requiredFields = ['name', 'login', 'password'];

        foreach ($requiredFields as $field) {
            if (!isset($_POST[$field]) || empty($_POST[$field])) {
                throw new \InvalidArgumentException("The {$field} field is mandatory.");
            }
        }
    }

    private function mappingToSave(): array {
        return [
            'name' => $_POST['name'],
            'login' => $_POST['login'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
    }
}
