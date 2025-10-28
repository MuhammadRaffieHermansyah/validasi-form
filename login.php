<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .success {
            color: green;
            background: #e8f5e8;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>

<body class="bg-gray-50 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-96">
        <h2 class="text-2xl font-bold mb-4 text-center text-slate-700">Login</h2>
        <?php
        if (isset($_GET['status']) && $_GET['status'] === 'success') {
            echo '<div class="success">Pendaftaran berhasil! Silakan login.</div>';
        }
        ?>
        <form action="auth.php" method="POST" class="space-y-4">
            <input type="email" name="email" placeholder="Email"
                class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400"
                required>

            <input type="password" name="password" placeholder="Password"
                class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400"
                required>

            <button type="submit" class="w-full bg-[#009879] text-white py-2 rounded-md hover:bg-[#007e65] transition">
                Masuk
            </button>
            <p class="text-center text-sm text-gray-600 mt-3">
                Belum punya akun? <a href="register.php" class="text-[#009879]">Daftar di sini</a>
            </p>
        </form>
    </div>
</body>

</html>