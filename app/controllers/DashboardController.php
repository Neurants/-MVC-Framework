<?php
require_once "Controller.php";

class DashboardController extends Controller {

    public function index() {
        session_start();

        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }

        $this->view("dashboard");
    }
}
