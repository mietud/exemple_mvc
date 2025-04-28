<?php
require_once "./config/database.php";
require __DIR__ . '/vendor/autoload.php';

use Misa\Mvc\Controllers\UserController;

$controller = new UserController();
echo $controller->index();
