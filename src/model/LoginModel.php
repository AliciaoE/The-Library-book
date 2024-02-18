<?php

namespace Model;

use PDO;

class LoginModel 
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function login($username, $password)
    {
        // Consultar la base de datos para buscar el usuario por nombre de usuario
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $query->bindParam(":username", $username);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró el usuario y la contraseña coincide
        if ($user && password_verify($password, $user['password'])) {
            // Las credenciales son válidas, se puede iniciar sesión
            session_start();
            $_SESSION['username'] = $username;
            return true;
        } else {
            // Las credenciales son incorrectas
            return false;
        }
    }
}
?>
