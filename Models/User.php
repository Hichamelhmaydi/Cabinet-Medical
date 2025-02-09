<?php
    require_once '../core/Database.php';
    
    class User {
        private $pdo;
        
        public function __construct() {
            $database = new Database();
            $this->pdo = $database->connect();
        }
        
        public function register($nom, $prenom, $email, $password, $role) {
            try {
                if ($this->emailExists($email)) {
                    return false;
                }
                
                $sql = "INSERT INTO users (nom, prenom, email, mot_de_passe, role) VALUES (:nom, :prenom, :email, :password, :role)";
                
                $stmt = $this->pdo->prepare($sql);
                
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                $params = [
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':email' => $email,
                    ':password' => $hashedPassword,
                    ':role' => $role
                ];
                
                return $stmt->execute($params);
                
            } catch (PDOException $e) {
                error_log("Erreur lors de l'inscription : " . $e->getMessage());
                return false;
            }
        }
        
        public function emailExists($email) {
            try {
                $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([':email' => $email]);
                
                return $stmt->fetchColumn() > 0;
                
            } catch (PDOException $e) {
                error_log("Erreur lors de la vérification de l'email : " . $e->getMessage());
                return false;
            }
        }

        public function login($email, $password) {
            try {
                $sql = "SELECT * FROM users WHERE email = :email";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([':email' => $email]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($user && password_verify($password, $user['mot_de_passe'])) {
                    unset($user['mot_de_passe']);
                    return $user;
                }
                return false;
                
            } catch (PDOException $e) {
                error_log("Erreur lors de la connexion : " . $e->getMessage());
                return false;
            }
        }
        
        public function isLoggedIn() {
            return isset($_SESSION['user_id']);
        }
        
        public function getCurrentUser() {
            if ($this->isLoggedIn()) {
                try {
                    $sql = "SELECT * FROM users WHERE id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->execute([':id' => $_SESSION['user_id']]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    unset($user['mot_de_passe']);
                    return $user;
                } catch (PDOException $e) {
                    error_log("Erreur lors de la récupération des données utilisateur : " . $e->getMessage());
                    return false;
                }
            }
            return false;
        }
    }