<?php
use App\Controllers\BitcoinController;

$router->get('/', [BitcoinController::class, 'index']);
$router->get('/bitcoin', [BitcoinController::class, 'index']);