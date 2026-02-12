<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minecraft</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 via-white to-gray-100 font-sans min-h-screen">
<nav class="bg-white shadow mb-6">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="<?php echo BASE_URL; ?>/" class="text-2xl font-bold text-blue-600 hover:text-blue-800">Minecraft</a>
        <div class="space-x-4">
            <a href="<?php echo BASE_URL; ?>/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
            <?php if(isset($_SESSION['user'])): ?>
                <a href="<?php echo BASE_URL; ?>/dashboard" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                <a href="<?php echo BASE_URL; ?>/logout" class="text-red-500 hover:text-red-700 font-medium">Logout</a>
            <?php else: ?>
                <a href="<?php echo BASE_URL; ?>/login" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                <a href="<?php echo BASE_URL; ?>/register" class="text-gray-700 hover:text-green-600 font-medium">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="container mx-auto px-6">
