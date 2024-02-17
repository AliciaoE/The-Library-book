<?php

require_once __DIR__ . '../../../vendor/autoload.php';

use Model\Login;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginModel = new Login();

    // Verificar si la conexion se establecio correctamente
    if ($loginModel->getConnectionStatus()) {
        echo "La conexio a la base de datos funciona!!.";
    } else {
        echo "Error: No se pudo establecer conexion a la base de datos.";
    }
    


    if ($loginModel->login($username, $password)) {
        // Usuario autentificado correctamente
        echo "Inicio de sesión correcto!";
    } else {
        // claves incorrectas  mensaje de error
        echo "Usuraria o Contraseña incorrctas";
    }
}

?>