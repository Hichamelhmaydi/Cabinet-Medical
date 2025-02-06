<?php include('header.php'); ?>

<main class="container mx-auto py-16">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-teal-600 mb-6">Tableau de bord Administrateur</h1>
        <p class="text-lg mb-12">Gérez les utilisateurs, les rendez-vous et accédez aux statistiques.</p>

        <!-- Aperçu des sections -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gestion des utilisateurs -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Utilisateurs</h2>
                <p class="text-gray-700 mb-4">Ajoutez, modifiez ou supprimez des utilisateurs.</p>
                <a href="admin-users.php" class="text-teal-600 hover:text-teal-700">Gérer les utilisateurs</a>
            </div>
            <!-- Gestion des rendez-vous -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Rendez-vous</h2>
                <p class="text-gray-700 mb-4">Confirmez ou annulez les rendez-vous.</p>
                <a href="admin-appointments.php" class="text-teal-600 hover:text-teal-700">Gérer les rendez-vous</a>
            </div>
            <!-- Statistiques des utilisateurs et consultations -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Statistiques</h2>
                <p class="text-gray-700 mb-4">Accédez aux statistiques sur les utilisateurs et les rendez-vous.</p>
                <a href="admin-statistics.php" class="text-teal-600 hover:text-teal-700">Voir les statistiques</a>
            </div>
        </div>

        <!-- Graphiques et Statistiques -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-teal-600 mb-6">Aperçu des Statistiques</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-teal-600 mb-4">Nombre d'Utilisateurs</h3>
                    <div class="text-center text-3xl font-bold text-teal-600">250</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-teal-600 mb-4">Nombre de Rendez-vous</h3>
                    <div class="text-center text-3xl font-bold text-teal-600">300</div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
