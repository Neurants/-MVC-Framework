<?php require 'layout/header.php'; ?>

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8 text-center transform hover:scale-105 transition">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to the Minecraft</h1>
    <p class="text-gray-700 mb-6">This is a simple login system.</p>
    <div class="space-x-4">
        <a href="<?php echo BASE_URL; ?>/login" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded shadow transition">Login</a>
        <a href="<?php echo BASE_URL; ?>/register" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded shadow transition">Register</a>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
