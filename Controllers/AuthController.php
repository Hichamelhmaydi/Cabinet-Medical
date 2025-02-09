<?php
session_start();
require_once '../core/Database.php';
require_once '../models/User.php';

class AuthController {
    private $userModel;
    
    public function __construct() {
        $this->userModel = new User();
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
                $_SESSION['success'] = "Inscription réussie !";
                header('Location: ../views/login.php');
                exit();
            } else {
                $_SESSION['error'] = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
                header('Location: ../views/register.php');
                exit();
            }
        }
    }
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            
            if (empty($email) || empty($password)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires";
                header('Location: ../views/login.php');
                exit();
            }
            
            $user = $this->userModel->login($email, $password);
            
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_name'] = $user['prenom'] . ' ' . $user['nom'];
                
                if ($user['role'] === 'medecin') {
                    header('Location: ../views/doctor_dashboard.php');
                } else {
                    header('Location: ../views/patient_dashboard.php');
                }
                exit();
            } else {
                $_SESSION['error'] = "L'adresse e-mail ou le mot de passe est incorrect";
                header('Location: ../views/login.php');
                exit();
            }
        }
    }
    
    public function logout() {
        session_unset();
        session_destroy();
        header('Location: ../views/login.php');
        exit();
    }
}

if (isset($_POST['action'])) {
    $auth = new AuthController();
    
    switch ($_POST['action']) {
        case 'login':
            $auth->login();
            break;
        case 'logout':
            $auth->logout();
            break;
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $auth = new AuthController();
    $auth->register();
}