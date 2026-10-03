<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progres'
            ],
            [
                'title' => 'Inventory Management System',
                'description' => 'Sistem pelacakan stok barang masuk dan keluar secara *real-time* berbasis web',
                'teknologi' => 'Laravel & MySQL',
                'image' => 'project3.jpg',
                'status' => 'Completed'
            ],
            [
                'title' => 'Point of Sales (POS) Kasir',
                'description' => 'Aplikasi kasir digital untuk pencatatan transaksi penjualan dan cetak struk',
                'teknologi' => 'React.js & Node.js',
                'image' => 'project4.jpg',
                'status' => 'In Progres'
            ],
            [
                'title' => 'Company Profile & CMS',
                'description' => 'Website profil perusahaan dengan sistem manajemen konten dinamis untuk admin',
                'teknologi' => 'PHP Native & Bootstrap',
                'image' => 'project5.jpg',
                'status' => 'Completed'
            ],
            [
                'title' => 'Smart Attendance System',
                'description' => 'Sistem absensi pegawai berbasis geolokasi dan pemindaian QR Code',
                'teknologi' => 'Flutter & Firebase',
                'image' => 'project6.jpg',
                'status' => 'In Progres'
            ],
            [
                'title' => 'Hospital Appointment Booking',
                'description' => 'Platform pendaftaran antrean pasien rumah sakit secara online dan terpadu',
                'teknologi' => 'Vue.js & Express.js',
                'image' => 'project7.jpg',
                'status' => 'Completed'
            ],
            [
                'title' => 'Learning Management System',
                'description' => 'Portal e-learning untuk manajemen kursus, kuis online, dan penilaian siswa',
                'teknologi' => 'Python & Django',
                'image' => 'project8.jpg',
                'status' => 'In Progres'
            ],
            [
                'title' => 'Real-Time Chat Application',
                'description' => 'Aplikasi perpesanan instan berbasis web menggunakan protokol WebSocket',
                'teknologi' => 'JavaScript & Socket.io',
                'image' => 'project9.jpg',
                'status' => 'Completed'
            ],
            [
                'title' => 'Library Digital Catalog',
                'description' => 'Sistem katalog perpustakaan digital untuk pencarian dan peminjaman buku',
                'teknologi' => 'Java & Spring Boot',
                'image' => 'project10.jpg',
                'status' => 'In Progres'
            ],
            [
                'title' => 'Financial Expense Tracker',
                'description' => 'Aplikasi pencatatan keuangan pribadi dan laporan pengeluaran bulanan',
                'teknologi' => 'React Native & SQLite',
                'image' => 'project11.jpg',
                'status' => 'Completed'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}