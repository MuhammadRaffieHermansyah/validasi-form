<?php
session_start();
require 'db.php';

$email = trim($_POST['email']);
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Password salah. <a href='login.php'>Coba lagi</a>";
    }
} else {
    echo "Email tidak ditemukan. <a href='form.php'>Daftar di sini</a>";
}
?>
