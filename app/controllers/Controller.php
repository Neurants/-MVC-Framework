<?php
class Controller {

    protected function view($view, $data = []) {
        // Extract data array into variables
        extract($data);

        // Include header

        // Include the main view content
        require "views/$view.php";

        // Include footer
    }
}
