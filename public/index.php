<?php

define('CONTROL', true);
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../core/HttpClient.php';
require_once __DIR__ . '/../app/Controllers/BitcoinController.php';

$router = new \Core\Router();
require_once __DIR__ . '/../routes/web.php';

$router->dispatch($_SERVER['REQUEST_URI']);
