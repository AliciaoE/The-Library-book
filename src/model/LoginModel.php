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
    
    public function login($last_name, $password)
    {
        // Verificar si la sesión está activa
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $query = $this->db->prepare("SELECT * FROM users WHERE last_name = :last_name AND password = :password");
        $query->bindParam(":last_name", $last_name);
        $query->bindParam(":password", $password);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['last_name'] = $last_name;
            return true; 
        } else {
            echo "<script>alert('Incorrect username or password. Please try again.');</script>";
            echo "<script>window.location = 'http://localhost/The-Library-book//src/view/formView.php';</script>";
            exit();
        }
    }
}
?>
