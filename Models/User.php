
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
                
                $sql = "INSERT INTO users (nom, prenom, email, mot_de_passe, role) 
                        VALUES (:nom, :prenom, :email, :password, :role)";
                
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
    }
    