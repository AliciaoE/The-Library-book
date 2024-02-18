<?php

namespace Controller;

use Model\LoginModel;

class LoginController 
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if (!empty($username) && !empty($password)) {
                if ($this->model->login($username, $password)) {
                    // Contraseña correcta
                    echo "<script>alert('Contraseña Ok.');</script>";
                } else {
                    // Contraseña incorrecta
                    echo "<script>alert('Contraseña fail.');</script>";
                }
            } else {
                // Datos de inicio de sesión incompletos
                echo "<script>alert('Por favor, complete todos los campos.');</script>";
            }
        }
    }
} 
?>
