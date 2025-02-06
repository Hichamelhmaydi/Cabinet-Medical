<?php include('header.php'); ?>

<main class="container mx-auto py-16">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-teal-600 mb-6">Prendre un Rendez-vous</h1>
        <p class="text-lg mb-12">Choisissez un médecin et réservez un créneau horaire.</p>
        
        <div class="bg-white p-10 rounded-lg shadow-lg max-w-md mx-auto">
            <form action="book-appointment.php" method="POST">
                <select name="doctor" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    <option value="1">Médecin 1</option>
                    <option value="2">Médecin 2</option>
                </select>
                <input type="date" name="appointment_date" class="w-full p-4 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">Prendre rendez-vous</button>
            </form>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>

