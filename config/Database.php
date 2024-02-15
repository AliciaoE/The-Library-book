<?php
namespace Config;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database{

    private $host = 'localhost'; 
    private $user = 'root'; 
    private $password;   
    private $dbname = 'biblioteca'; 

    public function __construct() {
      $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
      $dotenv->load();
      $this->password = $_ENV['DB_PASSWORD'];
  }

    public function connection(){

        try {
            $pdo = new PDO("mysql:host={$this->host}; dbname={$this->dbname}", $this->user, $this->password);
            echo ("conexión ha  sido exitosa");
            return $pdo;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
        }
    }

