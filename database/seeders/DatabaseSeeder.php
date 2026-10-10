<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['Sistem Informasi AKademik', 'In progress', 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, dosen, dan nilai.', 'Laravel & Bootstrap'],
            ['E-Commerce SEO Optimization', 'In progress', 'Aplikasi optimalisasi struktur heading dan indexing untuk toko online.', 'PHP & Google Search Console'],
            ['Redesign COver dan Branding', 'Selesai', 'Perancangan element grafis personal branding dan cover portofolio.', 'Figma & Canva'],
            ['Web Profile Mahasiswa', 'Selesai', 'Website profile mahasiswa prodi SI UNPAM.', 'Laravel & Bootstrap'],
            ['Aplikasi Kasir Sederhana', 'Selesai', 'Aplikasi kasir untuk mencatat transaksi penjualan harian.', 'PHP & MySQL'],
            ['Landing Page Toko Roti', 'Selesai', 'Halaman promosi responsif untuk usaha toko roti lokal.', 'HTML, CSS & Bootstrap'],
            ['Sistem Perpustakaan Digital', 'In progress', 'Pengelolaan data buku, anggota, dan peminjaman secara online.', 'Laravel & MySQL'],
            ['Desain UI Aplikasi Mobile', 'Selesai', 'Rancangan antarmuka aplikasi mobile untuk pemesanan makanan.', 'Figma'],
            ['Dashboard Data Penjualan', 'In progress', 'Dashboard visualisasi data penjualan bulanan dengan grafik.', 'Laravel & Chart.js'],
            ['Website Company Profile', 'Selesai', 'Website profil perusahaan dengan halaman layanan dan kontak.', 'Laravel & Bootstrap'],
        ];

        foreach ($projects as $i => $p) {
            Project::create([
                'title'       => $p[0],
                'image'       => 'project' . ($i + 1) . '.jpg',
                'status'      => $p[1],
                'description' => $p[2],
                'teknologi'   => $p[3],
            ]);
        }
    }
}