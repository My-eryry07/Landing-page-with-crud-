<?php
session_start();

include "controller/koneksi.php";
if (!isset($_SESSION["is_login"]) || $_SESSION["is_login"] !== true) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}


// Pastikan direktori untuk upload ada
$target_dir = "uploads/images/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true); // Membuat direktori jika belum ada
}

// Fungsi CRUD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menambahkan produk baru
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description']; // Ambil deskripsi
        $image = $_FILES['image'];

        // Upload gambar
        $target_file = $target_dir . basename($image["name"]);
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // Simpan data ke database
            $stmt = $db->prepare("INSERT INTO produk (title, price, description, image_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $title, $price, $description, $target_file);
            $stmt->execute();
        } else {
            echo "Error uploading file.";
        }
    }
    // Mengedit produk yang ada
    elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $stmt = $db->prepare("SELECT * FROM produk WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc(); // Ambil data produk untuk diedit
    }
    // Update produk
    elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description']; // Ambil deskripsi
        $image = $_FILES['image'];

        // Cek apakah ada gambar baru
        if ($image['name']) {
            $target_file = $target_dir . basename($image["name"]);
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                // Update data produk dengan gambar baru
                $stmt = $db->prepare("UPDATE produk SET title=?, price=?, description=?, image_path=? WHERE id=?");
                $stmt->bind_param("ssssi", $title, $price, $description, $target_file, $id);
                $stmt->execute();
            } else {
                echo "Error uploading file.";
            }
        } else {
            // Update data produk tanpa mengubah gambar
            $stmt = $db->prepare("UPDATE produk SET title=?, price=?, description=? WHERE id=?");
            $stmt->bind_param("sssi", $title, $price, $description, $id);
            $stmt->execute();
        }
    }
}

// Ambil data produk untuk ditampilkan
$result = $db->query("SELECT * FROM produk");
