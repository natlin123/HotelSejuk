<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejuk Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        html{
            scroll-behavior:smooth;
        }

        body{
            background:#f5f5f5;
        }

        .navbar{
            background:white;
        }

        .hero{
            height:100vh;
            background:url('https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=1200') center center;
            background-size:cover;
            position:relative;
        }

        .hero::before{
            content:'';
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.55);
        }

        .hero-content{
            position:relative;
            z-index:2;
            color:white;
            text-align:center;
            top:50%;
            transform:translateY(-50%);
        }

        .btn-green{
            background:#5f8d63;
            color:white;
            border:none;
            border-radius:30px;
            padding:12px 30px;
        }

        .btn-green:hover{
            background:#4f7752;
            color:white;
        }

        .section-title{
            color:#4f7752;
            font-weight:bold;
        }

        .room-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 0 15px rgba(0,0,0,0.08);
        }

        .room-card img{
            height:250px;
            object-fit:cover;
        }

        footer{
            background:#ece7df;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm fixed-top">
    <div class="container">

        <a class="navbar-brand fw-bold text-success" href="#">
            Sejuk Hotel
        </a>

        <button class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#rooms">
                        Rooms
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#amenities">
                        Amenities
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About Us
                    </a>
                </li>

            </ul>

            <a href="#" class="btn btn-link text-dark">
                Login
            </a>

            <a href="/booking/1/Deluxe-King"
               class="btn btn-green">
                Book Now
            </a>

        </div>

    </div>
</nav>

<!-- HERO -->
<section class="hero">

    <div class="hero-content container">

        <h1 class="display-2 fw-bold">
            Temukan Kesejukan<br>
            Sejati di Jantung Bali
        </h1>

        <p class="lead">
            Retret organik yang menyatu dengan alam.
            Nikmati kedamaian dan kemewahan budaya Bali.
        </p>

        <a href="#rooms"
           class="btn btn-green mt-3">
            Explore Rooms
        </a>

    </div>

</section>

<!-- ROOMS -->
<section id="rooms" class="py-5">

    <div class="container">

        <h2 class="text-center section-title mb-5">
            Pilihan Kamar Kami
        </h2>

        <div class="row">

            <!-- DELUXE KING -->
            <div class="col-md-4 mb-4">

                <div class="card room-card">

                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a">

                    <div class="card-body">

                        <h4>Deluxe King</h4>

                        <p>
                            Kamar king-size dengan balkon pribadi.
                        </p>

                        <h5 class="text-success">
                            Rp 1.500.000 / malam
                        </h5>

                        <a href="/booking/1/Deluxe-King"
                           class="btn btn-green">
                            Pesan Sekarang
                        </a>

                    </div>

                </div>

            </div>

            <!-- SUPERIOR TWIN -->
            <div class="col-md-4 mb-4">

                <div class="card room-card">

                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267">

                    <div class="card-body">

                        <h4>Superior Twin</h4>

                        <p>
                            Cocok untuk keluarga maupun teman.
                        </p>

                        <h5 class="text-success">
                            Rp 950.000 / malam
                        </h5>

                        <a href="/booking/2/Superior-Twin"
                           class="btn btn-green">
                            Pesan
                        </a>

                    </div>

                </div>

            </div>

            <!-- EXECUTIVE SUITE -->
            <div class="col-md-4 mb-4">

                <div class="card room-card">

                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85">

                    <div class="card-body">

                        <h4>Executive Suite</h4>

                        <p>
                            Suite mewah dengan fasilitas premium.
                        </p>

                        <h5 class="text-success">
                            Rp 2.500.000 / malam
                        </h5>

                        <a href="/booking/3/Executive-Suite"
                           class="btn btn-green">
                            Pesan
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- AMENITIES -->
<section id="amenities" class="py-5 bg-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Fasilitas Pilihan
            </h2>

            <p class="text-muted">
                Sentuhan alam di setiap sudut kenyamanan Anda.
            </p>

        </div>

        <div class="row g-4">

            <!-- Infinity Pool -->
            <div class="col-lg-8">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="position-relative">

                        <img
                            src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?w=1200"
                            class="w-100"
                            style="height:350px; object-fit:cover;">

                        <div class="position-absolute bottom-0 start-0 p-4 text-white">

                            <h2 class="fw-bold">
                                Infinity Pool
                            </h2>

                            <p class="mb-0">
                                Menyatu dengan rimbunnya lembah tropis.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Restaurant -->
            <div class="col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="position-relative">

                        <img
                            src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800"
                            class="w-100"
                            style="height:350px; object-fit:cover;">

                        <div class="position-absolute bottom-0 start-0 p-3 text-white">

                            <h4 class="fw-bold">
                                Bumi Restaurant
                            </h4>

                            <p class="mb-0">
                                Cita rasa lokal dari bahan organik terbaik.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Tirta Spa -->
            <div class="col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="position-relative">

                        <img
                            src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=800"
                            class="w-100"
                            style="height:280px; object-fit:cover;">

                        <div class="position-absolute bottom-0 start-0 p-3 text-white">

                            <h4 class="fw-bold">
                                Tirta Spa
                            </h4>

                            <p class="mb-0">
                                Peremajaan tubuh dan jiwa dengan tradisi Bali.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Filosofi Alam -->
            <div class="col-lg-8">

                <div
                    class="rounded-4 p-5 h-100"
                    style="background:#F4F1EA; min-height:280px;">

                    <div class="mb-3">

                        <span style="font-size:28px;">
                            🍃
                        </span>

                    </div>

                    <h2 class="fw-bold mb-4 text-success">

                        Filosofi Alam

                    </h2>

                    <p class="text-secondary" style="line-height:1.8;">

                        Setiap elemen di Sejuk Hotel dirancang
                        untuk menghormati dan melestarikan
                        keindahan alam sekitarnya.

                        Kami menggunakan material berkelanjutan
                        dan mendukung komunitas lokal untuk
                        menciptakan pengalaman menginap yang
                        harmonis dengan alam Bali.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ABOUT -->
<section id="about" class="py-5">

    <div class="container text-center">

        <h2 class="section-title mb-4">
            About Us
        </h2>

        <p class="fs-5">

            Sejuk Hotel menghadirkan pengalaman
            menginap yang menyatu dengan alam Bali.

            Kami menawarkan kenyamanan modern,
            pelayanan terbaik, dan suasana tenang
            untuk liburan yang berkesan.

        </p>

    </div>

</section>

<!-- FOOTER -->
<footer class="py-5">

    <div class="container text-center">

        <h4 class="text-success">
            Sejuk Hotel
        </h4>

        <p>
            © 2025 Sejuk Hotel Bali
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
