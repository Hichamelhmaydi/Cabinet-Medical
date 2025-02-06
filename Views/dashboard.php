<?php include('header.php'); ?>

<main class="container mx-auto py-16">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-teal-600 mb-6">Tableau de bord Médecin</h1>
        <p class="text-lg mb-12">Gérez les rendez-vous, les patients, et les traitements.</p>

        <!-- Aperçu des sections -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gestion des rendez-vous -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Rendez-vous</h2>
                <p class="text-gray-700 mb-4">Voir les rendez-vous à venir, confirmer ou annuler.</p>
                <a href="doctor-appointments.php" class="text-teal-600 hover:text-teal-700">Voir les rendez-vous</a>
            </div>
            <!-- Gestion des patients -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Patients</h2>
                <p class="text-gray-700 mb-4">Voir les informations et l’historique médical des patients.</p>
                <a href="doctor-patients.php" class="text-teal-600 hover:text-teal-700">Voir les patients</a>
            </div>
            <!-- Gestion des traitements -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-teal-600 mb-4">Traitements</h2>
                <p class="text-gray-700 mb-4">Mettre à jour et gérer les traitements médicaux des patients.</p>
                <a href="doctor-treatments.php" class="text-teal-600 hover:text-teal-700">Gérer les traitements</a>
            </div>
        </div>

        <!-- Section des statistiques -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-teal-600 mb-6">Statistiques des Patients</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-teal-600 mb-4">Nombre de Rendez-vous</h3>
                    <div class="text-center text-3xl font-bold text-teal-600">150</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-teal-600 mb-4">Patients Traités</h3>
                    <div class="text-center text-3xl font-bold text-teal-600">120</div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
