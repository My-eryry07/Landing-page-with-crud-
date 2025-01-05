<?php

include "controller/koneksi.php";
include "controller/admin_controller.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center ">Welcome to Admin Page</h1>
        <p class="text-center">Hello, <?php echo $_SESSION["username"]; ?></p>

        <!-- Form Tambah Produk -->
        <h2 class="mt-5">Add New Product</h2>
        <form method="POST" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Add Product</button>
        </form>

        <!-- Tabel Produk -->
        <h2 class="mt-5">Product List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><img src="<?php echo $row['image_path']; ?>" alt="Product Image" width="100"></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal<?php echo $row['id']; ?>">Edit</button>
                            </td>
                        </tr>

                        <!-- Modal Edit Produk -->
                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Product Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="<?php echo $row['title']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control"
                                                    value="<?php echo $row['price']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control"
                                                    required><?php echo $row['description']; ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <button type="submit" name="update" class="btn btn-warning">Update Product</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No products found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <?php include "register.php" ?>

        <form action="logout.php" method="POST">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>