<?php
session_start(); // Memulai session
include "controller/koneksi.php"; // Pastikan koneksi database sudah benar

$login_message = ""; // Inisialisasi pesan login

// Cek apakah pengguna sudah login
if (isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true) {
    header("Location: admin.php"); // Redirect ke admin.php jika sudah login
    exit();
}

// Proses login
if (isset($_POST['login'])) {
    $username = trim($_POST['username']); // Menghapus spasi di awal dan akhir
    $password = trim($_POST['password']); // Menghapus spasi di awal dan akhir

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $db->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $data["password"])) {
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true; // Set session is_login

            header("Location: admin.php"); // Redirect ke admin.php
            exit();
        } else {
            $login_message = "Login Gagal, Password Salah"; // Hanya muncul jika password salah
        }
    } else {
        $login_message = "Login Gagal, Akun Tidak Ditemukan"; // Hanya muncul jika akun tidak ditemukan
    }

    $stmt->close();
}

$db->close();
