<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Hafidz Maulana Ahmad';
        $nim = '242520116';
        $prodi = 'Teknologi informasi';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }
    public function daftar()
    {
    $mahasiswa = [
        ['nama' => 'Hafidz Maulana Ahmad', 'nim' => '242520116', 'ipk' => 3.85],
        ['nama' => 'Windah Basudara', 'nim' => '242520117', 'ipk' => 3.60],
        ['nama' => 'Budi Speed', 'nim' => '242520118', 'ipk' => 3.20],
        ['nama' => 'DeanKT', 'nim' => '242520119', 'ipk' => 2.80],
        ['nama' => 'Jelol', 'nim' => '242520120', 'ipk' => 3.90],
    ];

    return view('mahasiswa.daftar', compact('mahasiswa'));
    }
    public function detail($nim)
{
    $daftarMahasiswa = [
        ['nama' => 'Hafidz Maulana Ahmad', 'nim' => '242520116', 'ipk' => 3.85, 'prodi' => 'Teknologi Informasi'],
        ['nama' => 'Windah Basudara', 'nim' => '242520117', 'ipk' => 3.60, 'prodi' => 'Teknologi Informasi'],
        ['nama' => 'Budi Speed', 'nim' => '242520118', 'ipk' => 3.20, 'prodi' => 'Teknologi Informasi'],
        ['nama' => 'DeanKT', 'nim' => '242520119', 'ipk' => 2.80, 'prodi' => 'Teknologi Informasi'],
        ['nama' => 'Jelol', 'nim' => '242520120', 'ipk' => 3.90, 'prodi' => 'Teknologi Informasi'],
    ];

    $mhs = collect($daftarMahasiswa)->firstWhere('nim', $nim);

    abort_unless($mhs, 404);

    return view('mahasiswa.detail', compact('mhs'));
}
}
