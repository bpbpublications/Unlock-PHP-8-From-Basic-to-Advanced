<?php namespace TaskManager\Controllers;

use TaskManager\Models\User;
use TaskManager\System\Controller;
use TaskManager\System\Redirect;

class Login extends Controller {
    public function index(array $data = [], string $layout = null) : string|false {
        return $this->render('layouts/login.php');
    }

    public function onLogin(): void{
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        try {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $this->validateFieldRequired($user, $pass);
            $this->validateLogin($user, $pass);
            $this->createSession();

            Redirect::to('/');
        } catch (\Throwable $th) {
            Redirect::to('/login', [
                'error' => "User or password is incorrect"
            ]);
        }
    }

    private function validateFieldRequired(string $user, string $pass): void {
        if (empty($user)) {
            throw new \Exception("Field user is required");
        }

        if (empty($pass)) {
            throw new \Exception("Field password is required");
        }
    }

    private function validateLogin(string $user, string $pass): void {
        $userModel = new User;

        if (!hash_equals($user, $userModel->user) || !hash_equals($pass, $userModel->pass)) {
            throw new \Exception("Incorrect username or password");
        }
    }

    private function createSession(): void {
        $_SESSION['userLogged'] = true;
    }
}
