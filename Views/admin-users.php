<?php include('header.php'); ?>

<main class="container mx-auto py-16">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-teal-600 mb-6">Gérer les utilisateurs</h1>
        <p class="text-lg mb-12">Ajoutez, modifiez ou supprimez des utilisateurs.</p>
        
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-teal-600 mb-4">Ajouter un utilisateur</h2>
            <form action="add-user.php" method="POST">
                <input type="text" name="name" placeholder="Nom complet" class="w-full p-4 mb-4 border border-gray-300 rounded-md" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-md" required>
                <input type="password" name="password" placeholder="Mot de passe" class="w-full p-4 mb-4 border border-gray-300 rounded-md" required>
                <select name="role" class="w-full p-4 mb-4 border border-gray-300 rounded-md" required>
                    <option value="patient">Patient</option>
                    <option value="doctor">Médecin</option>
                </select>
                <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-md hover:bg-teal-700">Ajouter</button>
            </form>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-teal-600 mb-4">Liste des utilisateurs</h2>
            <!-- Cette section peut afficher les utilisateurs existants -->
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Nom</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Rôle</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Utilisateur 1</td>
                        <td class="border px-4 py-2">user1@example.com</td>
                        <td class="border px-4 py-2">Patient</td>
                        <td class="border px-4 py-2">
                            <a href="edit-user.php?id=1" class="text-teal-600 hover:text-teal-700">Modifier</a>
                            <a href="delete-user.php?id=1" class="text-teal-600 hover:text-teal-700 ml-4">Supprimer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
