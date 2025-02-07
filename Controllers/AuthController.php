<?php
session_start();
require_once '../core/Database.php';
require_once '../models/User.php';

class AuthController {
    private $userModel;
    
    public function __construct() {
        $db = new Database();
        $this->userModel = new User($db->getConnection());
    }
    
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = trim($_POST['nom'] ?? '');
            $prenom = trim($_POST['prenom'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            $role = trim($_POST['role'] ?? '');
            
            if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($role)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires";
                header('Location: ../views/register.php');
                exit();
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "Le format de l'email est incorrect";
                header('Location: ../views/register.php');
                exit();
            }
            
            if (strlen($password) < 6) {
                $_SESSION['error'] = "Le mot de passe doit contenir au moins 6 caractères";
                header('Location: ../views/register.php');
                exit();
            }
            
            if ($this->userModel->register($nom, $prenom, $email, $password, $role)) {
                $_SESSION['success'] = "Inscription réussie!";
                header('Location: ../views/login.php');
                exit();
            } else {
                $_SESSION['error'] = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
                header('Location: ../views/register.php');
                exit();
            }
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $auth = new AuthController();
    $auth->register();
}
