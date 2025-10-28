<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-xl w-96 text-center">
        <h2 class="text-2xl font-bold mb-2 text-slate-700">Selamat Datang, <?= htmlspecialchars($user['nama_lengkap']) ?>!</h2>
        <p class="text-gray-600 mb-4">Email: <?= htmlspecialchars($user['email']) ?></p>
        <a href="logout.php" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition">Logout</a>
    </div>
</body>
</html>
