<?php
require_once "./config/database.php";
require_once "./app/models/UserModel.php";
require_once "./app/controllers/UserController.php";



$controller = new UserController();
echo $controller->index();