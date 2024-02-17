<?php

namespace Model;

use Config\Database;

class Login
{

    private $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connection();  // Obtenertemos coneccion a BBDD
    }

    public function getConnectionStatus()
    {
        return $this->pdo !== null; // Retorna true si la bbdd esta conectada 
    }

    public function getConnection()
    {
        return $this->pdo; // Retorna el objeto de la connecion PDO
    }

    public function login($username, $password)
    {
        try {
            // Consulta para verificar las credenciales
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // existe usurio y constraseña
            if ($stmt->rowCount() > 0) {
                return true; // Usuario OK
            } else {
                return false; // datos incorrectas
            }
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>