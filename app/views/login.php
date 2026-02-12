<?php require 'layout/header.php'; ?>

<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Login</h2>

    <?php if (!empty($error)): ?>
        <p class="text-red-500 mb-4 text-center"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
        <input type="email" name="email" placeholder="Email" required
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="password" name="password" placeholder="Password" required
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow transition">
            Login
        </button>
    </form>
</div>

<?php require 'layout/footer.php'; ?>
