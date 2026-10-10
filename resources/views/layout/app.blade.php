<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UNPAM - Prodi Sistem Informasi')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">UNPAM - Prodi Sistem Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}"
                           class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/profile') }}"
                           class="nav-link {{ request()->is('profile') ? 'active fw-bold' : '' }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('project.index') }}"
                           class="nav-link {{ request()->is('project*') ? 'active fw-bold' : '' }}">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}"
                           class="nav-link {{ request()->is('about') ? 'active fw-bold' : '' }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN HALAMAN (berbeda tiap halaman) -->
    <div class="container flex-grow-1 my-4">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="bg-white text-dark border-top text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>