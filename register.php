<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 5px;
        }

        .success {
            color: green;
            background: #e8f5e8;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="container shadow-2xl mx-auto w-[30%] rounded-xl mt-10 p-6">
        <form method="POST" action="validasi-fungsi.php">
            <h2 class="text-2xl font-bold mb-4 text-center text-slate-700">Sign Up</h2>
            <div class="group-input grid grid-cols-1 gap-3 my-2">
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Nama Lengkap
                    </label>
                    <input name="nama"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Email
                    </label>
                    <input name="email"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Password
                    </label>
                    <input name="password" type="password"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Konfirmasi Password
                    </label>
                    <input name="confirm_password" type="password"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Nomor Telepon
                    </label>
                    <input name="telepon"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <div class="w-full">
                    <label
                        class="ml-1 mb-1 block text-gray-700 font-medium after:content-['*'] after:text-red-500 after:ml-1">
                        Tanggal Lahir
                    </label>
                    <input name="tanggal_lahir" type="date"
                        class="w-full border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:border-slate-400" />
                </div>
                <button type="submit" class="bg-[#009879] text-white py-1 rounded">Daftar</button>
            </div>
            <div class="text-center mt-5">Sudah punya akun? <a href="login.php" class="text-[#009879]">Login</a></div>
        </form>
    </div>
</body>

</html>