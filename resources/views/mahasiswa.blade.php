<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNPAM - Profile Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar-custom {
            background-color: #0d6efd;
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .profile-card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            max-width: 500px;
            width: 100%;
            margin: auto;
            overflow: hidden;
            border: 1px solid #eaeaea;
        }
        .profile-header {
            padding: 30px 20px 20px 20px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
        }
        .profile-img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        .profile-body {
            padding: 25px 30px;
        }
        .info-row {
            display: flex;
            justify-content: center;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        .info-label {
            font-weight: bold;
            width: 80px;
            text-align: right;
            padding-right: 8px;
            color: #333;
        }
        .info-value {
            color: #555;
            text-align: left;
            width: 220px;
        }
        footer {
            margin-top: auto;
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <div class="navbar-custom">
        UNPAM - Profile Mahasiswa
    </div>

    <!-- Main Content Container -->
    <div class="container my-auto py-4">
        <div class="profile-card">
            <!-- Profile Header -->
            <div class="profile-header">
                <img src="{asset.('images.png') }}" alt="Foto Profile" class="profile-img">
                <h4 class="fw-bold mb-2" style="color: #222;">Profile Mahasiswa</h4>
                <span class="badge bg-success px-3 py-1">{{ $mahasiswa['status'] }}</span>
            </div>

            <!-- Profile Body -->
            <div class="profile-body">
                <div class="info-row">
                    <div class="info-label">Nama:</div>
                    <div class="info-value">{{ $mahasiswa['nama'] }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">NIM:</div>
                    <div class="info-value">{{ $mahasiswa['nim'] }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Prodi:</div>
                    <div class="info-value">{{ $mahasiswa['prodi'] }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Email:</div>
                    <div class="info-value">{{ $mahasiswa['email'] }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Kampus:</div>
                    <div class="info-value">{{ $mahasiswa['kampus'] }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2026 UNPAM. All rights reserved.
    </footer>

</body>
</html>