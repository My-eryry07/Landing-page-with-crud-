<?php
include "controller/koneksi.php"; // Pastikan koneksi database sudah benar
include "controller/register_controller.php"; // Memanggil controller untuk memproses pendaftaran
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .register-container {
            max-width: 400px;
            /* Lebar maksimum kontainer */
            margin: auto;
            /* Pusatkan kontainer */
            padding: 20px;
            /* Padding di dalam kontainer */
            border-radius: 8px;
            /* Sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan */
            background-color: white;
            /* Warna latar belakang putih */
        }
    </style>
</head>

<body>
    <div class="register-container mt-5">
        <h3 class="text-center">Daftar Akun Administrator</h3>
        <?php if ($register_message): ?>
            <div class="alert alert-info" role="alert">
                <?= $register_message ?>
            </div>
        <?php endif; ?>
        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary w-100">Daftar Sekarang</button>
        </form>
        <p class="mt-3 text-center">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>