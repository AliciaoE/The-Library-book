<?php
namespace Config;

use PDO;
use PDOException;

class Database{

    private $host = 'localhost'; // 数据库主机地址
    private $user = 'root';     // 用户名
    private $password  = '';       
    private $dbname = 'library';       

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

