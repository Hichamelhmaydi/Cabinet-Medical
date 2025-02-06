<?php
class Database {
    private $host = "localhost";
    private $port = "5432";
    private $user;
    private $password;
    private $database;
    private $pdo;

    public function __construct() {
        $this->user = "postgres";
        $this->password = "abc";
        $this->database = "Cabinet_medical";

        try {
            $this->pdo = new PDO("pgsql:host={$this->host};port={$this->port};dbname={$this->database}", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connexion réussie à PostgreSQL!";
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>