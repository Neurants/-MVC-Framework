<?php
require_once "Controller.php";
require_once __DIR__ . "/../models/User.php";

class AuthController extends Controller {
    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = User::findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;

                header("Location: " . BASE_URL . "/dashboard");
                exit();
            } else {
                $error = "Invalid email or password";
            }
        }

        $this->view("login", ['error' => $error ?? null]);
    }

    public function register() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $existingUser = User::findByEmail($email);
            if ($existingUser) {
                $error = "Email already registered";
                $this->view("register", ['error' => $error]);
                return;
            }

            User::register($name, $email, $password);

            header("Location: " . BASE_URL . "/login");
            exit();
        }

        $this->view("register");
    }

    public function logout() {
        session_start();
        session_destroy();

        header("Location: " . BASE_URL . "/login");
        exit();
    }
}
