<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Clinique médicale</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-teal-600">Inscription</h2>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <?php 
                    echo htmlspecialchars($_SESSION['error']);
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <?php 
                    echo htmlspecialchars($_SESSION['success']);
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>
            
            <form action="../controllers/AuthController.php" method="POST">
                <input type="hidden" name="action" value="register">
                
                <div class="mb-4">
                    <input type="text" name="nom" placeholder="Nom de famille"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <div class="mb-4">
                    <input type="text" name="prenom" placeholder="Prénom"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Mot de passe"
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                           required>
                </div>
                
                <div class="mb-6">
                    <select name="role" 
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
                            required>
                        <option value="">Choisir le rôle</option>
                        <option value="patient">Patient</option>
                        <option value="medecin">Médecin</option>
                    </select>
                </div>
                
                <button type="submit"
                        class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition-colors">
                    S'inscrire
                </button>
            </form>
            
            <p class="mt-4 text-center text-sm">
                Vous avez déjà un compte ? <a href="login.php" class="text-teal-600 hover:underline">Se connecter</a>
            </p>
        </div>
    </div>
</body>
</html>
