<?php
require 'db.php';
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $telepon = htmlspecialchars(trim($_POST['telepon']));

    $errors = [];

    if (strlen($nama) < 2)
        $errors[] = "Nama minimal 2 karakter.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Email tidak valid.";
    if (strlen($password) < 6)
        $errors[] = "Password minimal 6 karakter.";
    if ($password !== $confirm_password)
        $errors[] = "Konfirmasi password tidak cocok.";

    $dob = new DateTime($tanggal_lahir);
    $today = new DateTime();
    $age = $today->diff($dob)->y;
    if ($age < 17)
        $errors[] = "Usia minimal 17 tahun.";

    if (!preg_match("/^(\\+62|62|0)8[1-9][0-9]{6,9}$/", $telepon)) {
        $errors[] = "Nomor telepon tidak valid. Gunakan format Indonesia (contoh: 081234567890)";
    }

    if (!empty($errors)) {
        echo "<h3>Validasi Gagal:</h3><ul>";
        foreach ($errors as $err)
            echo "<li>$err</li>";
        echo "</ul><a href='form.php'>Kembali</a>";
    } else {
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            header("Location: register.php?");
            echo "Email sudah terdaftar. <a href='login.php'>Login di sini</a>";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (nama_lengkap, email, password, nomor_telepon, tanggal_lahir) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nama, $email, $hashed, $telepon, $tanggal_lahir);

            if ($stmt->execute()) {
                header("Location: login.php?status=success");
                exit();
            } else {
                echo "Terjadi kesalahan: " . $conn->error;
            }
        }
    }
}
?>