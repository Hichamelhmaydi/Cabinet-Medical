<?php include('header.php'); ?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Clinique Médicale</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-teal-600">Connexion</h2>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <?php 
                    echo htmlspecialchars($_SESSION['error']);
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>
            
            <form action="../controllers/AuthController.php" method="POST">
                <input type="hidden" name="action" value="login">
                
                <div class="mb-4">
                    <input type="email" name="email" 
                           placeholder="Adresse e-mail"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <div class="mb-6">
                    <input type="password" name="password" 
                           placeholder="Mot de passe"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <button type="submit"
                        class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition-colors">
                    Se connecter
                </button>
            </form>
            
            <p class="mt-4 text-center text-sm">
                Vous n'avez pas de compte ? 
                <a href="register.php" class="text-teal-600 hover:underline">Créer un compte</a>
            </p>
        </div>
    </div>
</body>
</html>

<?php include('footer.php'); ?>