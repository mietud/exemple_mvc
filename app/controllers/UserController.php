<?php
Namespace Misa\Mvc\Controllers;

use Misa\Mvc\Models\UserModel;

class UserController{
    private $model;

    public function  __construct()
    {
        $this->model = new UserModel();
    }

    public function index(){
        $listUser = $this->model->allUsers();
        dump($listUser);

        $titrePage = "List user";
        ob_start();
           include __DIR__."/../views/user.php";
        return ob_get_clean();
    }

}
