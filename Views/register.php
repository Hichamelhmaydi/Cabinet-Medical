<?php include('header.php'); ?>

<main class="flex items-center justify-center bg-gray-100 py-16">
    <div class="bg-white p-10 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-3xl font-semibold text-teal-600 mb-6 text-center">Créer un compte</h2>
        <form action="register-action.php" method="POST">
            <input type="text" name="name" placeholder="Nom complet" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            <input type="password" name="password" placeholder="Mot de passe" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
            <select name="role" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                <option value="patient">Patient</option>
                <option value="doctor">Médecin</option>
            </select>
            <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">S'inscrire</button>
        </form>
        <p class="mt-4 text-center">Déjà un compte ? <a href="login.php" class="text-teal-600 hover:underline">Se connecter</a></p>
    </div>
</main>

<?php include('footer.php'); ?>
