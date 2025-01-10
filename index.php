<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>TUGAS WEB</title>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light ">
        <div class="container-fluid text-light">
            <a class="navbar-brand" href="#">NICE KICK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Pilihan</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="login.php">LOGIN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="shopicon" href="#">
                            <i data-feather="shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/1.jpg" class="d-block w-100" alt="..." style="height: 500px" />
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/2.jpg" class="d-block w-100" alt="..." style="height: 500px" />
                <div class="carousel-caption">
                    <h5>Second slide label</h5 <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/3.jpg" class="d-block w-100" alt="..." style="height: 500px" />
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->

    <!-- columns start -->
    <div class="container-fluid text-center bg-dark">
        <div class="row align-items-center" style="height: auto; padding: 20px 0;"> <!-- Adjust height to auto -->
            <!-- btn promo start -->
            <div class="promo text-center" style="margin-top:60px">
                <button type="button" class="btn btn-primary btn-circle" style="border-radius: 50%; padding: 0; width: 80px; height: 80px; margin: 0 20px;">
                    <img src="/assets/C.png" alt="" style="height: 72px; border-radius: 50%;" />
                </button>
                <button type="button" class="btn btn-primary btn-circle" style="border-radius: 50%; padding: 0; width: 80px; height: 80px; margin: 0 20px;">
                    <img src="/assets/A.png" alt="" style="height: 72px; border-radius: 50%;" />
                </button>
                <button type="button" class="btn btn-primary btn-circle" style="border-radius: 50%; padding: 0; width: 80px; height: 80px; margin: 0 20px;">
                    <img src="/assets/B.png" alt="" style="height: 72px; border-radius: 50%;" />
                </button>
                <button type="button" class="btn btn-primary btn-circle" style="border-radius: 50%; padding: 0; width: 80px; height: 80px; margin: 0 20px;">
                    <img src="/assets/D.png" alt="" style="height: 72px; border-radius: 50%;" />
                </button>
            </div>
            <!-- btn promo end -->

            <div class="product mb-3" style="text-align: center; padding: 20px;">
                <div class="highlight" style="color: green; font-style: italic;">TESTING</div>
                <div class="title" style="color:aqua; font-size: 2rem; font-weight: bold;">#CUMAEVOS</div>
                <div class="subtitle" style="color: grey; font-size: 1rem;">RRQ KAPAN PUNYA MWORD</div>
            </div>

            <div class="container mt-5">
                <!-- card start -->
                <div class="row g-3 justify-content-center">
                    <?php
                    include "controller/koneksi.php";

                    // Ambil data produk
                    $result = $db->query("SELECT * FROM produk");
                    while ($row = $result->fetch_assoc()) : ?>
                        <div class="col-md-3 col-6"> <!-- Adjust column size for better responsiveness -->
                            <div class="card" style="width: 100%; font-size: 2rem;"> <!-- Set width to 100% -->
                                <img src="<?php echo $row['image_path']; ?>" class="card-img-top"
                                    alt="<?php echo $row['title']; ?>" style="height: 150px; object-fit: cover;" />
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1rem;"><?php echo $row['title']; ?></h5>
                                    <p class="card-text" style="font-size: 0.8rem;">
                                        <?php echo $row['description']; ?>
                                    </p>
                                    <p class="card-price" style ```html="font-size: 0.85rem;">Harga: Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></p>
                                    <a href="#" class="btn bg-dark text-light" style="padding: 0.3rem 0.8rem; font-size: 0.8rem;">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- card end -->
            </div>
        </div>

        <div class="container-fluid text-center bg-dark">
            <div class="row align-items-center" style="height: auto; padding: 20px;"> <!-- Adjust height to auto -->
                <div class="col">One of three columns</div>
            </div>
        </div>
        <!-- column end -->

        <!-- Footer Start -->
        <hr style="border-top: 1px solid white" />
        <footer class="bg-dark text-light pt-4 pb-2">
            <div class="container">
                <div class="row">
                    <!-- Contact Section -->
                    <div class="col-md-4">
                        <h5>Contact</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="mailto:info@example.com" class="text-light">Email: info@example.com</a>
                            </li>
                            <li>
                                <a href="tel:+62123456789" class="text-light">Phone: +62 123 456 789</a>
                            </li>
                            <li>
                                <a href="https://www.example.com" class="text-light">Website: www.example.com</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Bantuan Section -->
                    <div class="col-md-4">
                        <h5>Bantuan</h5>
                        <ul class="list-unstyled">
                            <li><a href="/faq" class="text-light">FAQ</a></li>
                            <li><a href="/shipping-info" class="text-light">Pengiriman</a></li>
                            <li><a href="/returns" class="text-light">Pengembalian Barang</a></li>
                        </ul>
                    </div>

                    <!-- Media Sosial Section -->
                    <div class="col-md-4">
                        <h5>Media Sosial</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.facebook.com" class="text-light" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com" class="text-light" target="_blank">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" class="text-light" target="_blank">Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com" class="text-light" target="_blank">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Garis Pemisah -->
                <hr style="border-top: 1px solid white" />
            </div>

            <!-- Footer Bottom -->
            <div class="text-center py-2">
                <small>&copy; 2024 ErnesyyHightDev. All rights reserved.</small>
            </div>
        </footer>
        <!-- Footer End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>