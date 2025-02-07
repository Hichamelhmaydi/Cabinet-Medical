<?php
class Database {
    private $host = "localhost";
    private $port = "5432";
    private $dbname = "Cabinet_medical";
    private $user = "postgres";
    private $password = "abc";
    
    public function connect() {
        try {
            $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}";
            
            $pdo = new PDO($dsn, $this->user, $this->password);
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
            
        } catch (PDOException $e) {
            die("conexion avec la base de donnée a était éxhi: " . $e->getMessage());
        }
    }
}