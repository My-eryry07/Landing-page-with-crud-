<?php

include "controller/koneksi.php";

$register_message = "";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $register_message = "Username dan Password tidak boleh kosong.";
    } else {
        try {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Use prepared statements to prevent SQL injection
            $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $register_message = "Berhasil Register ";
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $register_message = "Username telah Digunakan";
            } else {
                $register_message = "Registrasi Gagal: " . $e->getMessage();
            }
        }
    }
    $db->close();
}
