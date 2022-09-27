<?php

use App\Controller\LoginController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/login/connected':
        LoginController::connected();
        break;

    case '/':
        LoginController::index();
        break;

    default:
     echo "Erro 404";
     break;
}