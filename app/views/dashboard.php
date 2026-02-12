<?php require 'layout/header.php'; ?>

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8 text-center transform hover:scale-105 transition">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">Dashboard</h1>
    <p class="text-gray-700 mb-4">Welcome, <?php echo $_SESSION['user']['name']; ?>!</p>
    <p class="text-gray-500 mb-6">Due to bug patches, this website is presently unavailable.</p>
    <a href="<?php echo BASE_URL; ?>/logout" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded shadow transition">
        Logout
    </a>
</div>

<?php require 'layout/footer.php'; ?>

