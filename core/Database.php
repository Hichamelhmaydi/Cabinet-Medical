<?php
class Database {
    private $host;
    private $port;
    private $user;
    private $password;
    private $database;
    private $pdo;

    public function __construct() {
        $this->host = "localhost";
        $this->port = "5432";
        $this->user = "postgres";
        $this->password="abc";
        $this->database = "Cabinet_medical";
    }
    try {
        $pdo = new PDO("pgsql:host=localhost;database=Cabinet_medical", "postgres", "abc");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "Connexion réussie à PostgreSQL!";
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>