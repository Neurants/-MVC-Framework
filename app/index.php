<?php
define('BASE_URL', '/app');

require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/DashboardController.php";

$basePath = BASE_URL;
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = '/' . trim(str_replace($basePath, '', $requestUri), '/');
if ($uri === '//') $uri = '/';

switch ($uri) {
    case '/':
        (new HomeController())->index();
        break;

    case '/login':
        (new AuthController())->login();
        break;

    case '/register':
        (new AuthController())->register();
        break;

    case '/dashboard':
        (new DashboardController())->index();
        break;

    case '/logout':
        (new AuthController())->logout();
        break;

    default:
        echo "404 Not Found";
}
