<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- INI NAVBAR ATAS YANG TINGGAL SATU-SATUNYA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">UNPAM - Prodi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/profile') }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA (SELAMAT DATANG & TOMBOL) -->
    <div class="container flex-grow-1 my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Selamat Datang</h2>
                <p class="text-muted">ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
                <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white text-dark border-top text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>