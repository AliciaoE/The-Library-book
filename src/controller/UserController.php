<?php

namespace Controller;
use Model\UserModel;

class UserController 
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function getUsers()
    {
        return ($this->model->getUsers()) ?
        $this->model->getUsers() : "No se ha encontrado ningún usuario";
    }
}