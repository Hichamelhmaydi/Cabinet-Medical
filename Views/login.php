<?php include('header.php'); ?>

<main class="flex items-center justify-center bg-gray-100 py-16">
    <div class="bg-white p-10 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-3xl font-semibold text-teal-600 mb-6 text-center">Connexion</h2>
        <form action="login-action.php" method="POST">
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            <input type="password" name="password" placeholder="Mot de passe" class="w-full p-4 mb-6 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">Se connecter</button>
        </form>
        <p class="mt-4 text-center">Pas encore inscrit ? <a href="register.php" class="text-teal-600 hover:underline">Créez un compte</a></p>
    </div>
</main>

<?php include('footer.php'); ?>
