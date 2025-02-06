<?php include('header.php'); ?>

<main class="container mx-auto py-16">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-teal-600 mb-6">Gérer les Rendez-vous</h1>
        <p class="text-lg mb-12">Confirmez, annulez ou gérez les rendez-vous des patients.</p>
        
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-teal-600 mb-4">Liste des Rendez-vous</h2>
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Médecin</th>
                        <th class="border px-4 py-2">Patient</th>
                        <th class="border px-4 py-2">Date</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Médecin 1</td>
                        <td class="border px-4 py-2">Patient 1</td>
                        <td class="border px-4 py-2">2025-02-05</td>
                        <td class="border px-4 py-2">
                            <a href="confirm-appointment.php?id=1" class="text-teal-600 hover:text-teal-700">Confirmer</a>
                            <a href="cancel-appointment.php?id=1" class="text-teal-600 hover:text-teal-700 ml-4">Annuler</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
