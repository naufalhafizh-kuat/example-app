<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Naufal Hafizh',
            'nim' => '251011701151',
            'prodi' => 'Sistem Informasi',
            'email' => 'naufalhafizh@icloud.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',
            'foto' => asset('images.png') // Memanggil gambar kelapa dari folder public
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}