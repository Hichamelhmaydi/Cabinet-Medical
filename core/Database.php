<?php
class Database {
    private $host = "localhost";
    private $port = "5432";
    private $dbname = "Cabinet_medical";
    private $user = "postgres";
    private $password = "abc";
    private $pdo;
    
    public function __construct() {
        try {
            $dsn = "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->password";
            $this->pdo = new PDO($dsn);
            
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES 'utf8'"); 
            
        } catch (PDOException $e) {
            die("connexion échoui : " . $e->getMessage());
        }
    }
    
    public function getConnection() {
        return $this->pdo;
    }
}