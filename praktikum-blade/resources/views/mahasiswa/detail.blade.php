@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
    <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
    <p><strong>Prodi:</strong> {{ $mhs['prodi'] }}</p>
    <p><strong>IPK:</strong> {{ $mhs['ipk'] }}</p>
    
    <br>
    <a href="{{ route('mahasiswa.daftar') }}">Kembali ke Daftar Mahasiswa</a>
@endsection